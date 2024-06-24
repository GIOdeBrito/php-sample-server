

/* URL relative to the GitHub codespaces link */
const URL = 'https://didactic-garbanzo-46gq4xrrwc5jww-3001.app.github.dev/';

function HttpRequest (action, args = {}, type = 'POST')
{
    const fdata = new FormData();

    fdata.append('action', action);
    fdata.append('args', JSON.stringify(args));
    
    const xmlreq = new XMLHttpRequest();
    const requestAddress = URL + 'admin.php';

    xmlreq.open(type, requestAddress, true);
    xmlreq.send(fdata);

    return new Promise(resolve =>
    {
        xmlreq.onload = (res) => resolve({
            status: xmlreq.status,
            response: res.target.responseText,
            raw: res
        });
    });
}

export {
    HttpRequest,
}

