/* The sortCompleteCallback does nothing but call the pagination object below, passing in the table id */
function sortCompleteCallback(tableId) {
        tablePaginater.showPage(tableId);
}

/* This is the JS object that paginates the table (N.B: Tables do not have to be sortable to use this object) */
var tablePaginater = {
        tableInfo: {},
        
        init: function() {
                var tables = document.getElementsByTagName('table');
                
                for(var t = 0, tbl; tbl = tables[t]; t++) {
                        if(!tbl.id || tbl.id == "" || tbl.className.search(/paginate-([0-9]+)/) == -1) continue;

                        tablePaginater.tableInfo[tbl.id] = {
                                rowsPerPage:tbl.className.match(/paginate-([0-9]+)/)[1],
                                currentPage:0
                        };
                        
                        tablePaginater.showPage(tbl.id, 0);
                        tablePaginater.createPageinationList(tbl.id);
                };
        },
        
        addClass: function(e,c) {
                if(new RegExp("(^|\\s)" + c + "(\\s|$)").test(e.className)) return;
                e.className += ( e.className ? " " : "" ) + c;
        },

        removeClass: function(e,c) {
                e.className = !c ? "" : e.className.replace(new RegExp("(^|\\s*\\b[^-])"+c+"($|\\b(?=[^-]))", "g"), "");
        },
        
        /* I shall leave it as an excercise for the reader to create the next|prev links commonly
           found within such pagination systems. I'm just creating a simple linked list(s).       */
        createPageinationList: function(tableId) {
                // Get the table
                var tbl = document.getElementById(tableId);
        
                // Create the UL
                var ul = document.createElement("ul");
                ul.className = "tablePaginater";
                ul.id = "paginateList-" + tableId;
                
                // clone the UL
                var ulc = ul.cloneNode(true);
                ulc.id =  "paginateList-" + tableId + "-clone";
                
                var rows = tablePaginater.getTableRows(tableId);
                var total = rows.length;
                var rowsPerPage
                var pages = Math.max(1, Math.ceil(total / tablePaginater.tableInfo[tableId].rowsPerPage));
                
                // Create the li & a tags to clone within the loop
                var li = document.createElement("li");
                var a  = document.createElement("a");
                a.href = "#";
                
                var lic, ac;
                
                // For each page, create a pagination button
                for(var i = 0; i < pages; i++) {
                        lic = li.cloneNode(false);
                        ac  = a.cloneNode(true);
                        ac.title = "View page " + (i + 1);
                        ac.appendChild(document.createTextNode(i+1));
                        lic.onclick = a.onclick = tablePaginater.show;
                        lic.appendChild(ac);
                        
                        if(i == 0) lic.className = "currentPage";

                        ul.appendChild(lic);
                        
                        lic = lic.cloneNode(true);
                        lic.onclick = lic.getElementsByTagName("a")[0].onclick = tablePaginater.show;
                        
                        ulc.appendChild(lic);
                };
                
                // Add the list below the table
                if(tbl.nextSibling) {
                        tbl.parentNode.insertBefore(ul, tbl.nextSibling);
                } else {
                        tbl.parentNode.appendChild(ul);
                };

                // Add another list above the table
                tbl.parentNode.insertBefore(ulc, tbl);
        },
        
        getTableRows: function(tableId) {
                var rows = [];
                var tbl = document.getElementById(tableId);
                
                var tbody = tbl.getElementsByTagName('tbody');

                if(tbody && tbody.length) {
                        tbody = tbody[0];
                        rows = tbody.getElementsByTagName('tr');
                } else {
                        var tmp = tbl.getElementsByTagName('tr');
                        for(var i = tmp.length; i--;) {
                                if(tmp[i].getElementsByTagName('th') || tmp[i].parentNode.tagName == "TFOOT") continue;
                                rows[rows.length] = tmp[i];
                        };
                };
                return rows;
        },
        
        showPage: function(tableId, page) {
                if(!(tableId in tablePaginater.tableInfo)) return;
                
                var tbl = document.getElementById(tableId);
                var rowsPerPage = tablePaginater.tableInfo[tableId].rowsPerPage;
                var rows = tablePaginater.getTableRows(tableId);
                
                page = typeof page == "undefined" ? tablePaginater.tableInfo[tableId].currentPage : page;

                var min = rowsPerPage * page;
                var max = Number(min) + Number(rowsPerPage);
                var rowStyle = tbl.className.search(/rowstyle-([\S]+)/) != -1 ? tbl.className.match(/rowstyle-([\S]+)/)[1] : false;
                var cnt = 0;
                var len = rows.length;
                
                for(var i = 0; i < len; i++) {
                        rows[i].style.display = (i >= min && i < max) ? "" : "none";
                        if(rowsPerPage % 2 && rowStyle && i >= min && i < max) {
                                tablePaginater.removeClass(rows[i], rowStyle);
                                if(cnt++ % 2) tablePaginater.addClass(rows[i], rowStyle);
                        };
                };
                
                tablePaginater.tableInfo[tableId].currentPage = page;
        },

        /* Event handler for the li|a click event */
        show: function(e) {
                var li = (this.tagName && this.tagName == "A") ? this.parentNode : this;
                var tableId = li.parentNode.id.replace("paginateList-", "").replace("-clone", "");
                var cnt     = 0;

                while(li.previousSibling) {
                        li = li.previousSibling;
                        if(li.tagName && li.tagName.toLowerCase() == "li") cnt++;
                };
                
                tablePaginater.showPage(tableId, cnt);

                var ul  = document.getElementById("paginateList-" + tableId);
                var ulc = document.getElementById("paginateList-" + tableId + "-clone");
                var i   = 0;
                
                while(ul.childNodes[i]) {
                        ul.childNodes[i].className = ulc.childNodes[i].className = i == cnt ? "currentPage" : "";
                        i++;
                };
                
                return false;
        }
}

fdTableSort.addEvent(window, "load", tablePaginater.init);
