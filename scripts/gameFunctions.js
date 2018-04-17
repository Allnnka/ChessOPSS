function drawBoard(){
    for(var x = 0; x <= xBoardDimensionSize; x++){		
        for(var y = 0; y <= yBoardDimensionSize; y++){

            if(initBoardWithWhiteSquare){
                square.beginFill(0xffffee);
                initBoardWithWhiteSquare = false;
            }
            else{
                square.beginFill(0x626466);
                initBoardWithWhiteSquare = true;
            }
            square.lineStyle(lineSquareSize, 0xcccccc);
            square.drawRect((x * oneSquareSize) + xBoardStartPos, (y * oneSquareSize) + yBoardStartPos, oneSquareSize, oneSquareSize);

            container.addChild(square);
        }
    }
}

function getSquareCenterPositionX(x){
    //check if x position is on our game board
    if(x > xBoardStartPos && x < xBoardStartPos + (xBoardDimensionSize * oneSquareSize)){
        //calculate x-index of square

        xIndex = Math.floor((Math.floor(x) - xBoardStartPos) / oneSquareSize) + 1;

        console.log("xIndex:" + xIndex)

        //calculate position by x-index of square

        xPosition = xBoardStartPos + (xIndex * oneSquareSize) - (oneSquareSize / 2);

        return xPosition;

    }

    return 0; 
}

function getSquareCenterPositionY(y){
    if(y > yBoardStartPos && y < yBoardStartPos + (yBoardDimensionSize * oneSquareSize)){
        yIndex = Math.floor((Math.floor(y) - yBoardStartPos) / oneSquareSize) + 1;

        console.log("yIndex:" + yIndex);

        yPosition = yBoardStartPos + (yIndex * oneSquareSize) - (oneSquareSize / 2);

        return yPosition;
    }
    return 0;
}

function drawFigure(x, y) {

    var texture = PIXI.Texture.fromImage('../img/figures/black_knight.png');
    var figure = new PIXI.Sprite(texture);
    figure.interactive = true;
    figure.buttonMode = true;
    figure.alpha = 0.75;
    figure.anchor.set(0.5);
    figure
        .on('pointerdown', onDragStart)
        .on('pointerup', onDragEnd)
        .on('pointerupoutside', onDragEnd)
        .on('pointermove', onDragMove);

    figure.x = x;
    figure.y = y;
    app.stage.addChild(figure);
}

function onDragStart(event) {
    this.data = event.data;
    this.alpha = 0.5;
    this.dragging = true;
}

function onDragEnd() {
    this.alpha = 1;
    this.dragging = false;
    this.data = null;
    this.x = getSquareCenterPositionX(this.x);
    this.y = getSquareCenterPositionY(this.y);
}

function onDragMove() {
    if (this.dragging) {
        var newPosition = this.data.getLocalPosition(this.parent);
        this.x = newPosition.x;
        this.y = newPosition.y;
    }
}
