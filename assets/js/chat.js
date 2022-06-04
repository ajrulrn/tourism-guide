const host          = window.location.host == 'localhost' ? 'http://localhost/wamanra' : window.location.origin;
const btnSend       = document.getElementById('btn-send');
let receiverEl      = document.getElementById('receiver');
let messageEl       = document.getElementById('message');
let countingMessage = document.getElementById('countingMessage');

messageEl.addEventListener('keyup', (e) => {
    let messageLength = e.target.value.length;
    (messageLength > 0) ? btnSend.removeAttribute('disabled') : btnSend.setAttribute('disabled', '');
    countingMessage.textContent = messageLength+'/100';  
})

btnSend.addEventListener('click', () => {
    let message = messageEl.value;
    if (message.trim().length > 0) sendChat(receiverEl.value, message).then(res => {messageEl.value = '';});
});

async function sendChat(receiver_user_id, message) {
    const url       = host+'/chat/store';
    const params    = new URLSearchParams({
        receiver_user_id: receiver_user_id,
        message: message
    });
    const options = {
        method: 'post',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: params
    };
    const response = await fetch(url, options);
    return response.json();
}

async function getConversation(receiver_user_id) {
    const url       = host+'/chat/get_conversation';
    const params    = new URLSearchParams({
        receiver_user_id: receiver_user_id,
    });
    const options = {
        method: 'post',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: params
    }
    const response = await fetch(url, options);
    return response.json();
}

setInterval(() => {
    let chatBody = document.querySelector('.chat-body');
    getConversation(receiverEl.value).then(res => {
        chatBody.textContent = '';
        if (res.length > 0) {
            res.forEach(item => {
                const row               = document.createElement('div')
                row.className           = 'row mb-2';
                const col               = document.createElement('div');
                col.className           = (item.receiver_user_id == receiverEl.value ? 'offset-2 text-end ' : '') + 'col-10';
                const p                 = document.createElement('p');
                p.className             = 'm-0 text-secondary fs-5';
                const span              = document.createElement('span');
                span.className          = 'd-inline-block bg-gradient p-2 rounded' + (item.sender_user_id == receiverEl.value ? ' bg-light text-secondary' : ' bg-primary text-white');
                span.textContent        = item.message;
                const secondP           = document.createElement('p');
                secondP.className       = 'm-0 text-secondary fs-6 ' + (item.sender_user_id == receiverEl.value ? ' text-start' : 'text-end');
                secondP.style.fontSize  = '.65rem';
                secondP.textContent     = dateOfChat(item.inserted_at);
                row.appendChild(col);
                col.appendChild(p);
                p.appendChild(span);
                col.appendChild(secondP);
                chatBody.appendChild(row);
            });
        } else {
            chatBody.classList.add('d-flex', 'align-items-center','justify-content-center');
            const paragraphEl       = document.createElement('p');
            paragraphEl.className   = 'm-0';
            paragraphEl.textContent = 'Tidak ada pesan.';
            chatBody.appendChild(paragraphEl);
        }
    });
}, 500)

function dateOfChat(datetime) {
    let splitedDate = datetime.split(' ');
    const date      = new Date(splitedDate[0])
    const day       = date.getDate();
    const month     = date.getMonth();
    return day +' '+ getMonth(month);
}

function getMonth(month) {
    let result = null;
    switch (month) {
        case 0:
            result = 'Jan';
            break;
        case 1:
            result = 'Feb';
            break;
        case 2:
            result = 'Mar';
            break;
        case 3:
            result = 'Apr';
            break;
        case 4:
            result = 'Mei';
            break;
        case 5:
            result = 'Jun';
            break;
        case 6:
            result = 'Jul';
            break;
        case 7:
            result = 'Agu';
            break;
        case 8:
            result = 'Sep';
            break;
        case 9:
            result = 'Okt';
            break;
        case 10:
            result = 'Nov';
            break;
        case 11:
            result = 'Des';
            break;                                                
        default:
            result = undefined;
            break;
    }

    return result;
}