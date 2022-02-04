import React, {Component, createRef} from 'react';
import axios from 'axios';



class SignUp extends Component {
    constructor() {
        super();
        this.state =  { 
            name: '',
            email: '',
            password: '',
            checkPassword: ''
        };
        this.alerter = createRef(null);

        this.handleChangeName = this.handleChangeName.bind(this);
        this.handleChangeEmail = this.handleChangeEmail.bind(this);
        this.handleChangePassword = this.handleChangePassword.bind(this);
        this.handleChangeCheckPassword = this.handleChangeCheckPassword.bind(this);
        this.handleSubmit = this.handleSubmit.bind(this);
    }

    

    handleChangeName(event) {
        this.setState({ name: event.target.value })
    }
    handleChangeEmail(event) {
        this.setState({ email: event.target.value })
    }
    handleChangePassword(event) {
        this.setState({ password: event.target.value })
    }
    handleChangeCheckPassword(event) {
        this.setState({ checkPassword: event.target.value })
    }
        
    handleSubmit(event) {
        event.preventDefault();

        if (this.state.password !== this.state.checkPassword)
        {
            this.alerter.current.classList.remove("hidden");
        }
        else {
            axios({
                method: 'post',
                url: 'http://127.0.0.1:8000/api/signup',
                data: {
                    fullname: this.state.name,
                    email: this.state.email,
                    password: this.state.password,
                    checkPassword: this.state.checkPassword
                    
                },
                headers: {
                'Access-Control-Allow-Origin': '*',
                'Content-Type': 'application/json',
                }
                }).then(response => {
                console.log(response.data);

            })
            
        }
        //console.log(this.tests);
    
    
    }
    

    /*componentDidMount() {
        this.getTests();
    }
    
    getTests() {
       axios.post(`http://localhost:8000/api/tests`, this.state.tests)
    }*/
    
    render() {
        return(
           
                <form onSubmit={this.handleSubmit}>
                    <label htmlFor="fullname">Nom et Prénom : </label>
                    <input name="fullname" type="text" value={this.state.name} onChange={this.handleChangeName} /><br/>

                    <label htmlFor="email">Email : </label>
                    <input name="email" type="text" value={this.state.email} onChange={this.handleChangeEmail} /><br/>

                    <label htmlFor="password">Mot de passe : </label>
                    <input name="password" type="password" value={this.state.password} onChange={this.handleChangePassword} /><br/>

                    <label htmlFor="email">Confirmation mot de passe : </label>
                    <input name="email" type="password" value={this.state.checkPassword} onChange={this.handleChangeCheckPassword} />
                    <small ref={this.alerter} className="text-danger hidden">Le mot de passe ne correspond pas</small><br/>

                    <button type="submit">Envoyer</button>
                    {JSON.stringify(this.state)}
                </form>
          
        )
    }
}
export default SignUp;