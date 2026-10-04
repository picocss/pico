import {
  hrefTo,
  navigate
} from "../_browser-chunks/chunk-LAYPZ6CY.js";
import "../_browser-chunks/chunk-FX5LXYO2.js";

// src/react/components/link.tsx
import React, { PureComponent } from "react";
var LEFT_BUTTON = 0, isPlainLeftClick = (e) => e.button === LEFT_BUTTON && !e.altKey && !e.ctrlKey && !e.metaKey && !e.shiftKey, cancelled = (e, cb = (_e) => {
}) => {
  isPlainLeftClick(e) && (e.preventDefault(), cb(e));
}, LinkTo = class extends PureComponent {
  constructor() {
    super(...arguments);
    this.state = {
      href: "/"
    };
    this.updateHref = async () => {
      let { kind, title = kind, story, name = story } = this.props;
      if (title && name) {
        let href = await hrefTo(title, name);
        this.setState({ href });
      }
    };
    this.handleClick = () => {
      let { kind, title = kind, story, name = story } = this.props;
      title && name && navigate({ title, name });
    };
  }
  componentDidMount() {
    this.updateHref();
  }
  componentDidUpdate(prevProps) {
    let { kind, title, story, name } = this.props;
    (prevProps.kind !== kind || prevProps.story !== story || prevProps.title !== title || prevProps.name !== name) && this.updateHref();
  }
  render() {
    let { kind, title = kind, story, name = story, children, ...rest } = this.props, { href } = this.state;
    return React.createElement("a", { href, onClick: (e) => cancelled(e, this.handleClick), ...rest }, children);
  }
};
LinkTo.defaultProps = {
  children: void 0
};

// src/react/index.ts
var react_default = LinkTo;
export {
  react_default as default
};
