import React, { PureComponent, ReactNode } from 'react';
import { StoryKind, ComponentTitle, StoryName } from 'storybook/internal/types';

interface Props {
    kind?: StoryKind;
    title?: ComponentTitle;
    story?: StoryName;
    name?: StoryName;
    children: ReactNode;
}
interface State {
    href: string;
}
declare class LinkTo extends PureComponent<Props, State> {
    static defaultProps: Props;
    state: State;
    componentDidMount(): void;
    componentDidUpdate(prevProps: Props): void;
    updateHref: () => Promise<void>;
    handleClick: () => void;
    render(): React.JSX.Element;
}

export { LinkTo as default };
