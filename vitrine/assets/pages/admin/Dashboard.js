import React, {Fragment, useState, useEffect } from 'react';
import { Link } from 'react-router-dom';
import { useTranslation } from 'react-i18next';
import { useAuth } from '../../contexts/AuthContext';
import axios from 'axios';


const Dashboard = () => {

    const { currentUser, admin} = useAuth();
    
    

    return (
        <div className='container text-center mt-5'>
            <p><Link to="/admin_feedback" className='text-deco'><button className="button-more btn-block ">Gérer avis</button></Link></p>
            <p><Link to="/nouveau_quiz" className='text-deco'><button className="button-more btn-block ">Créer nouveau quiz</button></Link></p>
            <p><Link to="/modifier_quiz" className='text-deco'><button className="button-more btn-block ">Modifier/supprimer quiz</button></Link></p>
            <p><Link to="/result_quiz" className='text-deco'><button className="button-more btn-block ">Résultats Quiz</button></Link></p>
        </div>
    )
}

export default Dashboard
