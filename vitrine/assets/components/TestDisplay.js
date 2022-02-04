import React, {Component} from 'react';
import axios from 'axios';
    
class TestDisplay extends Component {
    constructor() {
        super();
        this.state = { tests: []};
    }
    
    componentDidMount() {
        axios.get('http://127.0.0.1:8000/api/database').then(res => {
           this.setState({
               tests: res.data
           })
       })
    }
    
    
    render() {

        return(
            <div>
                <div >
                    { this.state.tests.map((test, index) =>
                        <div key={test.uid + index}>
                            <p>
                                {test.nom}
                            </p>
                        
                        </div>
                    )}
                </div>
            </div>
        )
    }
}
export default TestDisplay;