// Создаем объект
calc = {
    firstoper : '',
    secondoper : '',
    operation : '',
    result : ''
};

// Метод который очищает все свойства и приписывает в строку "0"
calc.reset = function () {
    this.firstoper = '';
    this.secondoper = '';
    this.operation = '';
    this.result = '';
    this.setLine(0);
}

//Математические операции
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
// Пишем строку в input.value
calc.setLine = function (string) {
    document.getElementById("line").value = String(string);
}

// Наполняем операнды
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

// Устанавливаем операцию
calc.setOperation = function (name) {
    this.operation = name;
    if (this.result !== '') {
        this.firstoper = this.result;
        this.secondoper = '';
    }
}

// Выполняем вычисление
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
            break;
        case '/':
            this.result = this.division(this.firstoper, this.secondoper);
            break;
        case 'mod':
            this.result = this.module(this.firstoper, this.secondoper);
            break;
        case 'degree':
            this.result = this.degree(this.firstoper, this.secondoper);
            break;            
   }
   this.setLine(this.result);
}

// Обрабатываем нажатие клавиш
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
                    else if (this.result !== '') {
                        this.result = this.invert(this.result);
                        this.setLine(this.result);
                    }
                    else {
                        this.secondoper = this.invert(this.secondoper);
                        this.setLine(this.secondoper);
                    }
                    break;
                case 'result':
                    this.getResult();
                    break;
                default:
                    this.setOperation(name);
                    break;
            }        
    }
    

}
