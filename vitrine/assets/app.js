import React, { Suspense } from 'react';
import ReactDOM, {render, hydrate} from 'react-dom';
import { BrowserRouter as Router} from 'react-router-dom';
import './css/app.css';
import Home from './Home';
import AuthContextProvider from './contexts/AuthContext';
import './i18n';
import { CookiesProvider } from 'react-cookie'


const rootElement = document.getElementById('root');
    
/*ReactDOM.render(

    <Router>
        <AuthContextProvider>
            <CookiesProvider>
                <Suspense fallback={(<div>Loading...</div>)}>
                    <Home />
                </Suspense>
            </CookiesProvider>
        </AuthContextProvider>
    </Router>,
    
    document.getElementById('root')
);*/

if (rootElement.hasChildNodes()) {
    hydrate(
        <Router>
            <AuthContextProvider>
                <CookiesProvider>
                    <Suspense fallback={(<div>Loading...</div>)}>
                        <Home />
                    </Suspense>
                </CookiesProvider>
            </AuthContextProvider>
        </Router>,
        
        rootElement
    );
}
else {
    render(
        <Router>
            <AuthContextProvider>
                <CookiesProvider>
                    <Suspense fallback={(<div>Loading...</div>)}>
                        <Home />
                    </Suspense>
                </CookiesProvider>
            </AuthContextProvider>
        </Router>,
        
        rootElement
    );
}