import React, {Component} from 'react';
import axios from 'axios';
    
class Test extends Component {
    constructor() {
        super();
        this.state =  { 
            nom: '',
            prenom: '',
            res: ''
        }
        this.handleChangeNom = this.handleChangeNom.bind(this)
        this.handleChangePrenom = this.handleChangePrenom.bind(this)
        this.handleSubmit = this.handleSubmit.bind(this)
    }

   

    handleChangeNom(event) {
        this.setState({ nom: event.target.value })
    }
    handleChangePrenom(event) {
        this.setState({ prenom: event.target.value })
    }
        
    handleSubmit(event) {
        event.preventDefault();

        
        axios({
            method: 'post',
            url: 'http://127.0.0.1:8000/api/tests',
            data: {
                nom: this.state.nom,
                prenom: this.state.prenom
            },
            headers: {
              'Access-Control-Allow-Origin': '*',
              'Content-Type': 'application/json',
            }
            }).then(response => {
            console.log(response.data);
            this.setState({
                res: response.data
            })
        })
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
                <div>
                    <div className="text-danger">{this.state.res}</div>
                <form onSubmit={this.handleSubmit}>
                    <label htmlFor="Nom">Nom : </label>
                    <input name="nom" type="text" value={this.state.nom} onChange={this.handleChangeNom} /><br/>
                    <label htmlFor="prenom">Prénom : </label>
                    <input name="prenom" type="text" value={this.state.prenom} onChange={this.handleChangePrenom} /><br/>
                    <button type="submit">Envoyer</button>
                    {JSON.stringify(this.state)}
                </form>
                </div>
        )
    }
}
export default Test;