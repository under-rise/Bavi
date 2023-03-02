const defectReport = ()=>({
    open: false,
    check:false,
    form: {
        opinion: "",
        category: ""
    },
    state: 1,
    f_open(){
        this.open= true;
        this.state=1;
    },
    init(){
        this.$watch('form',(value)=>{
            if(value.category !== "" && value.opinion !== ''){
                this.check = true;
            }
        });
    },
    submit() {
        fetch('debug.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(this.form)
        }).then((response) => {
            return response.json();
        }).then((e) => {
            console.log(e);
            if (e) {
                this.state = 2;
            } else {
                throw new Error('system error');
            }
        }).catch((error) => {
            alert("エラーが発生しました。お手数ですが再度送信ください。")
            console.log(error);
        });
    }
});

document.addEventListener('alpine:init', () => {
    Alpine.store('defectReport', defectReport);
});