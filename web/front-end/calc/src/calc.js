// функция записи в елемент Input
var setLine = function (string) {
    document.getElementById("line").value = String(string);
}

calc = {
    firstoper : '',
    secondoper : '',
    operation : '',
    reset: function () {
        // Метод который очищает все свойства и приписывает в строку "0"
        this.firstoper = '';
        this.secondoper = '';
        this.operation = '';
        delete this.result;
        setLine('0');
    },
    plus: function (callback) {
        callback (this.result = (+this.firstoper) + (+this.secondoper)); // Операция сложения
    },
    subtraction: function (callback) {
        callback(this.result = (+this.firstoper) - (+this.secondoper)); // Операция вычитания
    },
    multiplication: function (callback) {
        callback(this.result = (+this.firstoper) * (+this.secondoper)); // Операция умножения
    },
    division: function (callback) {
        callback(this.result = (+this.firstoper) / (+this.secondoper)); // Операци деления
    },
    module: function (callback) {
        callback(this.result = (+this.firstoper) % (+this.secondoper)); // Операция получения остатка от деления
    },
    degree: function (callback) {
        callback(this.result = Math.pow(+this.firstoper,+this.secondoper)); // Операция возведения в степень
    },
    setOperand: function (char, callback) {
        // Меняем значение операнда
        if (this.operation === '' && !this.result) {
            // меняем первый
            if (callback) {
                this.firstoper = callback(this.firstoper);
            } 
            setLine(this.firstoper += char);
           
        }
        else if (this.result && callback) {
            // Умножение на -1 результата
            this.result = callback(this.result);
            setLine(this.result);
        }        
        else if (this.firstoper !== '' && this.operation) {
            // меняем второй
            if (callback) {
                this.secondoper = callback(this.secondoper);
            } 
            setLine(this.secondoper += char);
        } 
    },
    setOperation: function (name) {
        // Сохраняем выбраную операцию
        this.operation = name;
        if (this.result) {
            this.firstoper = this.result;
            setLine(this.firstoper);
            delete this.result;
            this.secondoper = '';
        }
    },
    getResult: function () {
        // Выполняем вычисление
        switch (this.operation) {
            case '+':
                this.plus(setLine);
                break;
            case '-':
                this.subtraction(setLine);
                break;
            case '*':
                this.multiplication(setLine);
                break;
            case '/':
                this.division(setLine);
                break;
            case 'mod':
                this.module(setLine);
                break;
            case 'degree':
                this.degree(setLine);
                break;            
        } 
    }
};
// Обрабатываем нажатие клавиш
calc.pressKey = function (name) {
    if (Number.isInteger(parseInt(name))) {
        this.setOperand(name);
    } 
    else {
        switch (name) {
            case '':
                break;
            case 'ac':
                this.reset();
                break;
            case 'invert':
                this.setOperand('',function (number) {
                    return +number * -1;
                });
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

// Вешаем обработчик на кнопки
window.onload = function () {
    var buttons = document.querySelectorAll('input[type=button]');
    for (var i = 0; i < buttons.length; i++){
        buttons[i].onclick = function () {
            calc.pressKey(this.name);
        };
    }
}









