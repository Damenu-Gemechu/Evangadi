//import React from 'react'
import logo from "../images/icons/logo-sm.png";
import searchLogo from "../images/icons/search-icon-sm.png";
import cartLogo from "../images/icons/cart-sm.png";
import { Component } from "react";
import PropsHeader from "./PropsHeader";
import ImgPropsHeader from "./ImgPropsHeader";

class Header extends Component{
    render(){
  return (
    <div className="nav-wrapper fixed-top">
    <div className="container">
        <nav className="navbar navbar-toggleable-sm navbar-expand-md">
            <button className="navbar-toggler navbar-toggler-right"  
            type="button" data-toggle="collapse" 
            data-target=".navbar-collapse">
                ☰
            </button>

            <ImgPropsHeader i={logo} />

            <div className="navbar-collapse collapse">
                <ul className="navbar-nav nav-justified w-100 nav-fill">
                    <PropsHeader href={"/mac"} title={"Mac"}/>
                    <PropsHeader href={"/iphone"} title={"iphone"}/>
                    <PropsHeader href={"/ipad"} title={"ipad"}/>
                    <PropsHeader href={"/watch"} title={"watch"}/>
                    <PropsHeader href={"/tv"} title={"tv"}/>
                    <PropsHeader href={"/Music"} title={"Music"}/>
                    <PropsHeader href={"/Support"} title={"Support"}/>

                 <li className="nav-item" ><ImgPropsHeader i={searchLogo}/></li>
                <li className="nav-item"><ImgPropsHeader i={cartLogo}/></li>
                </ul>
            </div>
        </nav>
    </div>
</div>
  )
}
}

export default Header