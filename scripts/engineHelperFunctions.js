function isFigurePositionValid(x, y){
    state = true;

    if(x < xBoardStartPos || x > xBoardStartPos + (xBoardDimensionSize * oneSquareSize)){
        state = false;
    }

    if(y < yBoardStartPos || y > yBoardStartPos + (yBoardDimensionSize * oneSquareSize)){
        state = false;
    }

    return state;
}

function isSquareColorBlack(x, y){

    xIndex = 0;
    yIndex = 0;

    if(x > xBoardStartPos && x < xBoardStartPos + (xBoardDimensionSize * oneSquareSize)){
        xIndex = Math.floor((Math.floor(x) - xBoardStartPos) / oneSquareSize) + 1;
    }

    if(y > yBoardStartPos && y < yBoardStartPos + (yBoardDimensionSize * oneSquareSize)){
        yIndex = Math.floor((Math.floor(y) - yBoardStartPos) / oneSquareSize) + 1;
    }

    if(initBoardWithWhiteSquare){

        if(xIndex != 0 && isEven(xIndex) && yIndex != 0 && !isEven(yIndex))
            return true;
        else
            return false;
    }

    return -1;
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

function getSquareCenterPositionX(x){
    if(x > xBoardStartPos && x < xBoardStartPos + (xBoardDimensionSize * oneSquareSize)){

        xIndex = Math.floor((Math.floor(x) - xBoardStartPos) / oneSquareSize) + 1;

        console.log("xIndex:" + xIndex)

        xPosition = xBoardStartPos + (xIndex * oneSquareSize) - (oneSquareSize / 2);

        return xPosition;
    }
    return 0; 
}