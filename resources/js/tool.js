function setMenuItemCollapsed(menuItem, collapsed = true) {
    const key = `nova.navigation.${menuItem.key}.collapsed`;

    if (localStorage.getItem(key))
        return;

    localStorage.setItem(key, collapsed);
}

function collapseMenuRecursive(menu, collapsed = true) {
    menu
        .filter(menuItem => menuItem.collapsable && menuItem.items && menuItem.items.length > 0)
        .forEach(menuItem => {
            setMenuItemCollapsed(menuItem, collapsed);

            if (menuItem.items.length > 0) {
                collapseMenuRecursive(menuItem.items, collapsed);
            }
        });
}

Nova.booting(function () {
    const menu = Nova.config('mainMenu');

    collapseMenuRecursive(menu, Nova.config('novaMenuCollapsed'));
});
