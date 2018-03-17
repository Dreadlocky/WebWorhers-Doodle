/**
 * Created by PhpStorm
 * Author: Michal Potfaj
 * Date: 3/15/2018
 * Time: 10:49 AM
 */

var context;
var canvas;
var clickX = [];
var clickY = [];
var clickDrag = [];
var clickColor = [];
var clickThickness = [];
var currentColor; // Currently used color
var currentThickness; // Currently used thickness of pen
var paint = false;
var clear;

// Socket
// Change your IP address here
var socket = new WebSocket('ws://147.175.98.204:5500');

$(document).ready(function () {

    // Making canvas to be downloadable trough link
    var canvas = document.getElementById('drawCanvas'),
        mirror = document.getElementById('mirror');

    mirror.addEventListener('contextmenu', function () {
        mirror.src = canvas.toDataURL('image/png');
    });
    var button = document.getElementById('btn-download');
    button.addEventListener('click', function () {
        button.href = canvas.toDataURL('image/png');
    });

    // Tooltip for download link
    $('[data-toggle="tooltip"]').tooltip();

    // Initializing variables
    canvas = document.getElementById('drawCanvas');
    canvas.width = $("#drawCanvas").parent().width();
    canvas.height = 500;
    context = canvas.getContext('2d');

    // Setting initial color for drawing
    currentColor = selectColor();
    currentThickness = selectThickness();

    $("#drawCanvas").mousedown(function (e) {
        var mouseX = e.pageX - this.offsetLeft - this.parentElement.offsetLeft;
        var mouseY = e.pageY - this.offsetTop - this.parentElement.offsetTop;

        paint = true;
        // Change color each time mousedown event is fired
        currentColor = selectColor();
        currentThickness = selectThickness();

        addClick(e.pageX - this.offsetLeft - this.parentElement.offsetLeft, e.pageY - this.offsetTop - this.parentElement.offsetTop);
        sendMessage(e.pageX - this.offsetLeft - this.parentElement.offsetLeft, e.pageY - this.offsetTop - this.parentElement.offsetTop, false);


        redraw();
    });

    $('#drawCanvas').mousemove(function (e) {
        if (paint) {
            addClick(e.pageX - this.offsetLeft - this.parentElement.offsetLeft, e.pageY - this.offsetTop - this.parentElement.offsetTop, true);
            sendMessage(e.pageX - this.offsetLeft - this.parentElement.offsetLeft, e.pageY - this.offsetTop - this.parentElement.offsetTop, true);
            redraw();
        }
    });

    $('#drawCanvas').mouseup(function (e) {
        paint = false;
        sendMessage(e.pageX - this.offsetLeft - this.parentElement.offsetLeft, e.pageY - this.offsetTop - this.parentElement.offsetTop, false);
    });

    $('#clear-canvas').on('click', function () {
        clearCanvasButton();
    });
});


function addClick(x, y, dragging) {
    clickX.push(x);
    clickY.push(y);
    clickDrag.push(dragging);
    clickColor.push(currentColor); //Push new color
    clickThickness.push(currentThickness);
}

function redraw() {
    //context.clearRect(0, 0, context.canvas.width, context.canvas.height); // Clears the canvas

    context.lineJoin = "round";
    //context.lineWidth = selectThickness();

    for (var i = 0; i < clickX.length; i++) {
        context.beginPath();
        if (clickDrag[i] && i) {
            context.moveTo(clickX[i - 1], clickY[i - 1]);
        } else {
            context.moveTo(clickX[i] - 1, clickY[i]);
        }
        context.lineTo(clickX[i], clickY[i]);
        context.closePath();
        context.strokeStyle = clickColor[i];
        context.lineWidth = clickThickness[i];
        context.stroke();
    }
}

function selectColor() {
    var $color = $('#color-picker').val();
    return '#' + $color;
}

function selectThickness() {
    return $('#pen-thickness').val();
}

function clearCanvasButton() {
    clear = true;
    clearCanvas();
    sendMessage();
}

function clearCanvas() {
    // Delete arrays
    clickX = [];
    clickY = [];
    clickThickness = [];
    clickColor = [];
    clickDrag = [];

    // Clear canvas
    context.clearRect(0, 0, context.canvas.width, context.canvas.height);
}

function sendMessage(x, y, dragging) {
    console.log("X:" + x + ",Y: " + y + ",Color: " + currentColor + ",Dragging: " + dragging + ",Clear:" + clear + "Thickness: " + currentThickness);
    var data = {
        "x": x,
        "y": y,
        "dragging": dragging,
        "color": currentColor,
        "clear": clear,
        "paint": paint,
        "thickness": currentThickness
    };

    socket.send(JSON.stringify(data));

    clear = false;
}

socket.onmessage = function (message) {
    var data = JSON.parse(JSON.parse(message.data).utf8Data);
    console.log("Recieved data: " + data);

    if (data.clear == true) {
        clearCanvas();
        redraw();
        return;
    }

    clickX.push(data.x);
    clickY.push(data.y);
    clickDrag.push(data.dragging);
    paint = data.paint;
    clickColor.push(data.color);
    clickThickness.push(data.thickness);

    redraw();
};

socket.onerror = function (error) {
    console.log('WebSocket error: ' + error);
};