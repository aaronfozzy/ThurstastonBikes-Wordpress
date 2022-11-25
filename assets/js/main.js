/* Script to allow lazy image loading */
function CitrusOnLoadPrep() {
        try { 
            bindMasterHandler();
        } catch (err) {
            
        }
        try { 
            Sys.WebForms.PageRequestManager.getInstance().add_endRequest(EndRequestHandler);
            Sys.WebForms.PageRequestManager.getInstance().add_initializeRequest(StartRequestHandler);
        } catch (err) {
            
        }
    }
if (window.addEventListener) // W3C standard
    {
        window.addEventListener('load', CitrusOnLoadPrep, false); // NB **not** 'onload'
    } 
    else if (window.attachEvent) // Microsoft
    {
        window.attachEvent('onload', CitrusOnLoadPrep);
    }


function bindHandler() {}
function localAjaxStartPostback() {}








