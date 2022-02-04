import React, { Component, Fragment } from 'react';
import { useTranslation } from 'react-i18next';
import img1 from '../../images/img1.webp';
import img2 from '../../images/img2.webp';
import img4 from '../../images/img4.webp';
import img5 from '../../images/img5.webp';
import img6 from '../../images/img6.webp';

const videoChoice = false;

const Main1 = () => {

    const { t } = useTranslation('homepage');

    
        return (
            <Fragment>
                
                {videoChoice ?     
                <div className="text-center">
                    <iframe width="80%" className="height-video" src="https://www.youtube.com/embed/w7ejDZ8SWv8" title="YouTube video player" frameBorder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowFullScreen></iframe>
                </div>
              :
            <div className="height-img m-auto">
                 <div id="carouselExampleIndicators" className="carousel slide" data-ride="carousel">
                    <ol className="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" className="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                    </ol>
                    <div className="carousel-inner">
                        <div className="carousel-item active">
                            <img src={img5} className="d-block w-100 height-img" alt="..."/>
                            <div className="carousel-caption text-dark">
                                <h5>Title</h5>
                                <p>Text text text text</p>
                            </div>
                        </div>
                        <div className="carousel-item">
                            <img src={img1} className="d-block w-100 height-img" alt="..."/>
                            <div className="carousel-caption d-none d-md-block text-dark">
                                <h5>Title</h5>
                                <p>Text text text</p>
                                <a href="">Voici un Lien</a>
                            </div>
                        </div>
                        <div className="carousel-item">
                            <img src={img2} className="d-block w-100 height-img" alt="..."/>
                        </div>
                        <div className="carousel-item">
                            <img src={img4} className="d-block w-100 height-img" alt="..."/>
                        </div>
                        <div className="carousel-item">
                            <img src={img6} className="d-block w-100 height-img" alt="..."/>
                        </div>
                    </div>
                    <button className="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
                        <span className="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span className="sr-only">Previous</span>
                    </button>
                    <button className="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
                        <span className="carousel-control-next-icon" aria-hidden="true"></span>
                        <span className="sr-only">Next</span>
                    </button>
                </div>
            </div>
}       
                
                <div className="label-title">
                    <p>
                        {t('main1.qui sommes nous', {ns: 'homepage'})}
                    </p>
                </div>
                <div className="label-content">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus odit mollitia laborum in earum voluptatum ullam officiis accusamus expedita, aspernatur dolore sapiente quia aliquam! Molestias distinctio ut ea excepturi aliquid optio aut amet itaque expedita vitae explicabo nisi necessitatibus dignissimos, magni eum autem praesentium maiores quia alias. Eius autem nostrum, repudiandae facilis.
                    </p>
                </div>


                
                
            
                <div className="row ">
                    <div className="col-xl-6 justify-content-center">
                        <img className="img" src={img1} alt="Image 1" />
                    </div>
                    <div className="col-xl-6">
                        <div className="label-title">
                            <p>
                                {t('main1.expertise', {ns: 'homepage'})}
                            </p>
                        </div>
                        
                        <div className="label-content-nbg">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus odit mollitia laborum in earum voluptatum ullam officiis accusamus expedita, aspernatur dolore sapiente quia aliquam! Molestias distinctio ut ea excepturi aliquid optio aut amet itaque expedita vitae explicabo nisi necessitatibus dignissimos, magni eum autem praesentium maiores quia alias. Eius autem nostrum, repudiandae facilis.
                            </p>

                            <div className="text-center"><button className="button-more">{t('button.en savoir plus', {ns: 'homepage'})}</button></div>
                        </div>
                    </div>
                </div>

                
                <div className="row">
                    <div className="col-xl-6">
                        <div className="label-title">
                            <p>
                                {t('main1.savoir faire', {ns: 'homepage'})}
                            </p>
                        </div>
                        <div className="label-content-nbg">
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus odit mollitia laborum in earum voluptatum ullam officiis accusamus expedita, aspernatur dolore sapiente quia aliquam! Molestias distinctio ut ea excepturi aliquid optio aut amet itaque expedita vitae explicabo nisi necessitatibus dignissimos, magni eum autem praesentium maiores quia alias. Eius autem nostrum, repudiandae facilis.
                            </p>

                            <div className="text-center"><button className="button-more">{t('button.en savoir plus', {ns: 'homepage'})}</button></div>
                        </div>
                    </div>
                    <div className="col-xl-6">
                        <img className="img" src={img2} alt="Ordinateur portable" />
                    </div>
                </div>



                <div className="label-title">
                    <p>
                        {t('main1.nos services', {ns: 'homepage'})}
                    </p>
                </div>
                <div className="label-content">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus odit mollitia laborum in earum voluptatum ullam officiis accusamus expedita, aspernatur dolore sapiente quia aliquam! Molestias distinctio ut ea excepturi aliquid optio aut amet itaque expedita vitae explicabo nisi necessitatibus dignissimos, magni eum autem praesentium maiores quia alias. Eius autem nostrum, repudiandae facilis.
                    </p>
                    <div className="text-center"><button className="button-more-gold">{t('button.en savoir plus', {ns: 'homepage'})}</button></div>
                </div>

        
            
    
            </Fragment>
        )
    
}

export default Main1;
