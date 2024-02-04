import React, { Component } from 'react'
 class ImgPropsHeader extends Component {
  render() {
    return (
        <>
        <a className="navbar-brand mx-auto"
        href="#">
        <img src={this.props.i} />
        </a>
        </>
    )
    }
}
export default ImgPropsHeader;