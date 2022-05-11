function setMenuItemCollapsed(menuItem, collapsed = true) {
    const key = `nova.navigation.${menuItem.key}.collapsed`;

    if (localStorage.getItem(key))
        return;

    localStorage.setItem(key, collapsed);
}

function collapseMenuRecursive(menu) {
    menu
        .filter(menuItem => menuItem.collapsable && menuItem.items && menuItem.items.length > 0)
        .forEach(menuItem => {
            setMenuItemCollapsed(menuItem);

            if (menuItem.items.length > 0) {
                collapseMenuRecursive(menuItem.items);
            }
        });
}

Nova.booting(function () {
    if (!Nova.config('novaMenuCollapsed'))
        return;

    const menu = Nova.config('mainMenu');

    collapseMenuRecursive(menu);
});
