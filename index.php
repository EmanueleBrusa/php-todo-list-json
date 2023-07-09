<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>php-todo-list-json</title>
</head>
<body>
    <div class="wrapper">
        <div id="app">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1 class="display-1 text-muted">Todo List</h1>
                        <ul class="list-group list-group-flush border border-1 rounded">
                            <li v-for="(todoItem, index) in todoList" :key="index" class="list-group-item">
                                <span @click="changeStatus(index)" :class="todoItem.done ? '' : 'text-decoration-line-through cursor-pointer'">{{ todoItem.text }}</span>
                                <button @click="deleteItem(index)" class="btn btn-danger btn-sm float-end"><i class="fa-solid fa-trash" style="color: #fff;"></i></button>
                            </li>
                        </ul>
                        <div>
                            <input type="text" @keyup.enter="list" v-model="todoItem" class="form-control mt-4" placeholder="Nuova voce...">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js" integrity="sha512-uMtXmF28A2Ab/JJO2t/vYhlaa/3ahUOgj1Zf27M5rOo8/+fcTUVH0/E0ll68njmjrLqOBjXM3V9NiPFL5ywWPQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="./js/script.js"></script>
</body>
</html>