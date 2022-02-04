import React, {Component, createRef} from 'react';
import axios from 'axios';



class SignIn extends Component {
    constructor() {
        super();
        this.state =  { 
            email: '',
            password: '',
            tests: []
        };
        this.alerter = createRef(null);

        this.handleChangeEmail = this.handleChangeEmail.bind(this);
        this.handleChangePassword = this.handleChangePassword.bind(this);
        this.handleSubmit = this.handleSubmit.bind(this);
    }

    

    handleChangeEmail(event) {
        this.setState({ email: event.target.value })
    }
    handleChangePassword(event) {
        this.setState({ password: event.target.value })
    }

        
    handleSubmit(event) {

        event.preventDefault();

            axios({
                    method: 'post',
                    url: 'http://127.0.0.1:8000/api/signin',
                    data: {
                        email: this.state.email,
                        password: this.state.password,
                    },
                    headers: {
                    'Access-Control-Allow-Origin': '*',
                    'Content-Type': 'application/json',
                    }
                })  .then(res => {
                        console.log(res),
                        this.setState({
                            
                            tests: res.data
                        }) 
                        
                    });

    }
    
    render() {
        return(
           <div>
                <form onSubmit={this.handleSubmit}>

                    <label htmlFor="email">Email : </label>
                    <input name="email" type="text" value={this.state.email} onChange={this.handleChangeEmail} /><br/>

                    <label htmlFor="password">Mot de passe : </label>
                    <input name="password" type="password" value={this.state.password} onChange={this.handleChangePassword} /><br/>

                    <button type="submit">Connexion</button>
                    {/*JSON.stringify(this.state)*/}
                </form>

                <div>
                <div >
                    { this.state.tests.map((test, index) =>
                        <div key={test.id_token + index}>
                            <p>
                                {test.id_token}
                            </p>
                        
                        </div>
                    )}
                </div>
                </div>
                </div>
        )
    }
}
export default SignIn;