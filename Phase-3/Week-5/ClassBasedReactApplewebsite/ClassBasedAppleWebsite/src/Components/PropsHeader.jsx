import React, { Component } from 'react'

class PropsHeader extends Component {
  render() {
    return (
        <>
       <li className="nav-item">
        <a className="nav-link js-scroll-trigger" href={this.props.href}>
        {this.props.title}
        </a>
        </li>
        </>
    )
  }
}
export default PropsHeader;