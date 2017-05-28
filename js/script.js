function addAuthor() {
    var name = document.getElementById('name').value;
    var img = document.getElementById('img').value;
    var description = document.getElementById('description').value;

    if (name == "" || img == "" || description == "") {
        $('#myModal').modal('show') 
        document.getElementById('modal-body').innerHTML = "Вы ввели не всю информацию, вернитесь назад и заполните все поля!";
    } else if (!img.startsWith("http")) {
        $('#myModal').modal('show') 
        document.getElementById('modal-body').innerHTML = "Ссылка на картинку должна начинаться с http/https";                      
    } else {
        $.ajax({
            url: '../controller/saveAuthor.php',
            data : {name: name, img: img, description: description},
            type : "POST",
            success: function(){
                document.location.href = 'http://phil0s0pher.tk/views/authors.php';
            }
        });                     
    }
}

function addQuote() {
    var quote = document.getElementById('quote').value;
    var author = document.getElementById('author').value;
    var topic = document.getElementById('topic').value;
    if (quote == "" || author == "" || author == 0 || topic == "" || topic == 0) {
        $('#myModal').modal('show') 
        document.getElementById('modal-body').innerHTML = "Вы ввели не всю информацию, вернитесь назад и заполните все поля!";
    } else {
        $.ajax({
            url: '../controller/saveQuote.php',
            data : {quote: quote, author: author, topic: topic},
            type : "POST",
            success: function(){
                document.location.href = 'http://phil0s0pher.tk/views/quotes.php';
            }
        });                     
    }
}

function addTopic() {
    var name = document.getElementById('name').value;
    var img = document.getElementById('img').value;

    if (name == "" || img == "") {
        $('#myModal').modal('show') 
        document.getElementById('modal-body').innerHTML = "Вы ввели не всю информацию, вернитесь назад и заполните все поля!";
    } else if (!img.startsWith("http")) {
        $('#myModal').modal('show') 
        document.getElementById('modal-body').innerHTML = "Ссылка на картинку должна начинаться с http/https";                      
    } else {
        $.ajax({
            url: '../controller/saveTopic.php',
            data : {name: name, img: img },
            type : "POST",
            success: function(){
                document.location.href = 'http://phil0s0pher.tk/views/topics.php';
            }
        });                     
    }
}

function updateQuote() {
    var newQuote = document.getElementById('newQuote').value;
    var author = document.getElementById('author').value;
    var topic = document.getElementById('topic').value;
    var updateById = document.getElementById('updateById').value;

    if (newQuote == "" || author == "" || author == 0 || topic == "" || topic == 0) {
        $('#myModal').modal('show') 
        document.getElementById('modal-body').innerHTML = "Вы ввели не всю информацию, вернитесь назад и заполните все поля!";
    } else {
        $.ajax({
            url: '../models/updateQuoteHandler.php',
            data : {newQuote: newQuote, author: author, topic: topic, updateById: updateById},
            type : "POST",
            success: function(){
                document.location.href = 'http://phil0s0pher.tk/views/quotes.php';
            }
        });                     
    }
}

function deleteAuthor(id){
    deleteById = id;

    if (deleteById == "" ) {
        $('#myModal').modal('show') 
        document.getElementById('modal-body').innerHTML = "Ошибка! Попробуйте снова.";
    } else {
        $.ajax({
            url: '../controller/deleteAuthor.php',
            data : {deleteById: deleteById},
            type : "POST",
            success: function(){
                document.location.href = 'http://phil0s0pher.tk/views/authors.php';
            }
        });                     
    }
}

function deleteQuote(id) {
    deleteById = id;
    if (deleteById == "" ) {
        $('#myModal').modal('show') 
        document.getElementById('modal-body').innerHTML = "Ошибка! Попробуйте снова.";
    } else {
        $.ajax({
            url: '../controller/deleteQuote.php',
            data : {deleteById: deleteById},
            type : "POST",
            success: function(){
                document.location.href = 'http://phil0s0pher.tk/views/quotes.php';
            }
        });                     
    }
}

function deleteTopic(id){
    deleteById = id;
    if (deleteById == "" ) {
        $('#myModal').modal('show') 
        document.getElementById('modal-body').innerHTML = "Ошибка! Попробуйте снова.";
    } else {
        $.ajax({
            url: '../controller/deleteTopic.php',
            data : {deleteById: deleteById},
            type : "POST",
            success: function(){
                document.location.href = 'http://phil0s0pher.tk/views/topics.php';
            }
        });                     
    }
}
