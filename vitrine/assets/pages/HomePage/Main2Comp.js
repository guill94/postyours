import React, { Component, Fragment, useRef } from 'react';
import { Link } from 'react-router-dom';
import { useAuth } from '../../contexts/AuthContext';

const Main2Comp = (props) => {
    const imgFormation = useRef(null);
    const col2 = useRef(null);
    const col1 =useRef(null);
   

    const showTxt = () => {
        col2.current.classList.remove("hidden");
        col1.current.classList.add("col-xl-6");
        col1.current.classList.remove("container");
        col2.current.classList.add("col-xl-6"); 
    }

    const hideTxt = () => {   
        col2.current.classList.add("hidden");
        col1.current.classList.remove("col-xl-6");
        col1.current.classList.add("container");
        col2.current.classList.remove("col-xl-6");
    }

        return (
            
            <Fragment>
                
                <div className="">
                    <div className="label-title">
                            <p data-testid='title'>
                                {props.title}
                            </p>
                    </div>
                    <div onMouseOver={showTxt} onMouseLeave={hideTxt} className="row align-items-center">
                        <div ref={col1} className="container">
                            <img data-testid='image' ref={imgFormation} className="img" src={props.image} alt="Image 6" />
                        </div>
                        <div ref={col2} className="hidden">
                            
                            <div className="label-content-nbg">
                                <p className="mt-5" data-testid='children'>
                                    {props.children}
                                </p>

                                <div className="text-center"><Link data-testid='link' to={props.link}><button data-testid='button' className="button-more">{props.button}</button></Link></div>
                            </div>
                        </div>
                    </div>
                </div>

            </Fragment>
        )
};

export default Main2Comp;
