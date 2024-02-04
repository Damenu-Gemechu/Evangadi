import React, { Component } from 'react'

 class PropsFooter extends Component {
  render() {
    return (
      <>
      <li>
        <a href={this.props.href}>{this.props.link}</a>
      </li>
      </>
    )
  }
}
export default PropsFooter;