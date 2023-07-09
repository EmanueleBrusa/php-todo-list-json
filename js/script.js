const { createApp } = Vue;

createApp({
    data() {
        return {
            todoList: [],
            todoItem: null,
            apiUrl: 'server.php',
        }
    },
    mounted() {
        axios.get(this.apiUrl).then((response) => {
            this.todoList = response.data;
        });
        console.log(this.todoList);
    },
    methods: {
        list() {
            if (this.todoItem != '') {
                let obj = {
                    text: this.todoItem,
                    done: true,
                }
                const data = {
                    todoItem: obj,
                }
                axios.post(this.apiUrl, data, {
                    headers: { 'Content-Type': 'multipart/form-data' }
                }).then((response) => {
                    this.todoItem = '';
                    this.todoList = response.data;
                });
            }
        },
        deleteItem(index) {
            const remove = new FormData();
            remove.append('remove', index);

            axios.post(this.apiUrl, remove).then((result) => {
                this.todoList = result.data
            })
        },
        changeStatus(index) {
            const changeStatus = new FormData();
            changeStatus.append('change', index);

            axios.post(this.apiUrl, changeStatus).then((result) => {
                this.todoList = result.data
            })
        }
    },
}).mount('#app');