(()=>{function n(o){var t=!(arguments.length>1&&void 0!==arguments[1])||arguments[1];o.filter((function(n){return n.collapsable&&n.items&&n.items.length>0})).forEach((function(o){!function(n){var o=!(arguments.length>1&&void 0!==arguments[1])||arguments[1],t="nova.navigation.".concat(n.key,".collapsed");localStorage.getItem(t)||localStorage.setItem(t,o)}(o,t),o.items.length>0&&n(o.items,t)}))}Nova.booting((function(){n(Nova.config("mainMenu"),Nova.config("novaMenuCollapsed"))}))})();