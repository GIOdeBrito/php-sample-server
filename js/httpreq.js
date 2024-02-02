
var M_URL = 'php/admin.php';

function HttpRequest (action, args, type = 'POST')
{
    const fdata = new FormData();

    fdata.append('action', action);
    fdata.append('args', JSON.stringify(args));
    
    const xmlreq = new XMLHttpRequest();

    xmlreq.open(type, M_URL, true);
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

