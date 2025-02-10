import Grid from '@PSJs/components/grid/grid';
import LinkRowActionExtension from '@PSJs/components/grid/extension/link-row-action-extension';
import SubmitRowActionExtension from '@PSJs/components/grid/extension/action/row/submit-row-action-extension';
import SortingExtension from '@PSJs/components/grid/extension/sorting-extension';
import PositionExtension from '@PSJs/components/grid/extension/position-extension';
import FiltersResetExtension from '@PSJs/components/grid/extension/filters-reset-extension';
const { $ } = window

$(() => {
    const grid = new Grid('product')

    grid.addExtension(new SortingExtension());
    grid.addExtension(new LinkRowActionExtension());
    grid.addExtension(new SubmitRowActionExtension());
    grid.addExtension(new PositionExtension());
    grid.addExtension(new FiltersResetExtension());

});
