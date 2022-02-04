import React from 'react';
import { render, screen }  from "@testing-library/react";
import {RenderHome} from "../pages/HomePage/RenderHome";
import {shallow} from 'enzyme';


test ('test', function () {
    render(<RenderHome></RenderHome>);
    const demo = document.querySelector('#toto');
    expect(demo).not.toBeNull(); 
});


describe('services', () => {
    it('uses props', () => {
        const title = 'titre';
        const image = 'image.jpg';
        const link = '/test'
        const children = 'Lorem ipsum';

        render (
            <Services
                title = {title}
                image = {image}
                link = {link}
            >
                {children}
            </Services> 
        );

        const elementTitle = screen.getByTestId('title');
        expect(elementTitle).toBeInTheDocument();
        expect(elementTitle).toHaveTextContent('titre')

        const elementImage = screen.getByTestId('image');
        expect(elementImage).toHaveAttribute('src', 'image.jpg');

        const elementLink = screen.getByTestId('link');
        expect(elementLink).toBeInTheDocument();
        expect(elementLink).toHaveAttribute('to', '/test');

        const elementChildren = screen.getByTestId('children');
        expect(elementChildren).toBeInTheDocument();
        expect(elementChildren).toHaveTextContent('lorem ipsum');
    });
});