import * as storybook_internal_csf from 'storybook/internal/csf';
import { ComponentTitle, StoryName, StoryId, StoryKind } from 'storybook/internal/types';

interface ParamsId {
    storyId: StoryId;
}
interface ParamsCombo {
    kind?: StoryKind;
    title?: ComponentTitle;
    story?: StoryName;
    name?: StoryName;
}
declare const navigate: (params: ParamsId | ParamsCombo) => void;
declare const hrefTo: (title: ComponentTitle, name: StoryName) => Promise<string>;
declare const linkTo: (idOrTitle: string | ((...args: any[]) => string), nameInput?: string | ((...args: any[]) => string)) => (...args: any[]) => void;
declare const withLinks: (...args: any) => any;

declare const _default: () => storybook_internal_csf.PreviewAddon<storybook_internal_csf.AddonTypes>;

export { _default as default, hrefTo, linkTo, navigate, withLinks };
