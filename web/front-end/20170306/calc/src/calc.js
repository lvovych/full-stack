calc = {
    firstoper : '',
    secondoper : '',
    operation : '',
    result : ''
};

calc.reset = function () {
    this.firstoper = '';
    this.secondoper = '';
    this.operation = '';
    this.result = '';
    this.setLine(0);
    console.log(this);

}
// Mathimatics operations methods
calc.plus = function (first, second) {
    first = parseInt(first);
    second = parseInt(second);
    return first + second;
}
calc.subtraction = function (first, second) {
    first = parseInt(first);
    second = parseInt(second);
    return first - second;
}
calc.multiplication = function (first, second) {
    first = parseInt(first);
    second = parseInt(second);
    return first * second;
}
calc.division = function (first, second) {
    first = parseInt(first);
    second = parseInt(second);
    return first / second;
}
calc.module = function (first, second) {
    return first % second;
}
calc.degree = function (first, second) {
    first = parseInt(first);
    second = parseInt(second);
    return Math.pow(first, second);
}
calc.invert = function (number) {
    number = parseInt(number);
    return number * -1 ;
}
calc.setLine = function (string) {
    document.getElementById("line").value = String(string);
}

// Modification properties
calc.addToChar = function (symb) {
    if (this.operation === '') {
        this.firstoper += symb;
        this.setLine(this.firstoper);
    }
    else {
        this.secondoper += symb;
        this.setLine(this.secondoper);
    }
    
}

calc.setOperation = function (name) {
    this.operation = name;
    if (this.result !== '') {
        this.firstoper = this.result;
        this.secondoper = '';
    }
}

calc.getResult = function () {
   switch (this.operation) {
        case '+':
            this.result = this.plus(this.firstoper, this.secondoper);
            break;
        case '-':
            this.result = this.subtraction(this.firstoper, this.secondoper);
            break;
        case '*':
            this.result = this.multiplication(this.firstoper, this.secondoper);
            console.log("Result: " + this.result);
            break;
        case '/':
            this.result = this.division(this.firstoper, this.secondoper);
            break;
        case 'mod':
            this.result = this.module(this.firstoper, this.secondoper);
            break;
        case 'degree':
            this.result = this.degree(this.firstoper, this.secondoper);
            console.log("Result: " + this.result);
            break;            
   }
   this.setLine(this.result);
}


calc.pressKey = function (name) {
    if (Number.isInteger(parseInt(name))) {
        this.addToChar(name);
    } 
    else {
        switch (name) {
                case 'ac':
                    this.reset();
                    break;
                case 'invert':
                    if (this.operation === '') {
                        this.firstoper = this.invert(this.firstoper);
                        this.setLine(this.firstoper);
                    }
                    else {
                        this.secondoper = this.invert(this.secondoper);
                        this.setLine(this.secondoper);
                    }
                    break;
                case 'result':
                    console.log(this);

                    this.getResult();
                    break;
                default:
                    this.setOperation(name);
                    break;
            }        
    }
    

}
