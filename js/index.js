
import { HttpRequest } from './httpreq.js';

window.onload = () =>
{
    setControls();
};

function setControls ()
{
    let buttons = Array.from(window.sectionbuttons.children);

    // Get time
    buttons[0].onclick = async () =>
    {
        let res = await HttpRequest('gettime', { });
        window.jsonresponse.textContent = res.response;
    };

    // Dump post
    buttons[1].onclick = async () =>
    {
        let res = await HttpRequest('dumppost', { pressed: true, function: 'setControls' });
        window.jsonresponse.textContent = res.response;
    };

    // Get message
    buttons[2].onclick = async () =>
    {
        let res = await HttpRequest('getmessage', { });
        window.jsonresponse.textContent = res.response;
    };
}


