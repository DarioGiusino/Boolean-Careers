console.log('vue ok', Vue);

const app = Vue.createApp({
    name: 'To Do List',
    data() {
        return {
            newTask: {
                text: '',
                done: false
            },
            tasks: [
                {
                    text: 'fare la spesa',
                    done: false
                },
                {
                    text: 'giocare alla play',
                    done: true
                },
            ]
        }
    },
    methods: {
        addTask(){
           if(this.newTask){
               const task = {...this.newTask};

                this.tasks.push(task);
            }; 
            this.clearText();

        },
        deleteTask(target){
            this.tasks.splice(target, 1);
        },
        clearText(){
            this.newTask.text = '';
        },
        isDone(target){
            this.tasks[target].done = !this.tasks[target].done
        }
    }
});

app.mount('#app');