import React, {Fragment, useState, useEffect} from 'react';
import { Link } from 'react-router-dom';
import { useAuth } from '../contexts/AuthContext';




export const Profile = () => {


    const {currentUser, admin, idToken} = useAuth();
    const [isAdmin, setIsAdmin] = useState(false);

    useEffect(() => {
        if (admin ===true) {
            setIsAdmin(true);
        }
     }, [admin]);

    
    return (
        <Fragment>
            {JSON.stringify(idToken)}
            <div className='text-center display-4'>
                <p>Vous êtes connecté : {currentUser.email}</p>
                
            </div>
            {isAdmin == true &&
                <div className='text-center container'>
                    <Link to="/admin" className="nav-link nav-link-bottom"><button className='button-more btn-block'>Admin</button></Link>
                </div>
            }
            
            <div className='text-center container'>
                <Link to="/resultats" className="nav-link nav-link-bottom"><button className='button-more btn-block'>Quiz</button></Link>
            </div>
            
        </Fragment>
    )
}

export default Profile;
