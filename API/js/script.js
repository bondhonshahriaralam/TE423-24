fetch('https://newsdata.io/api/1/news?apikey=pub_30977a3372f5b4e759ff3fc7e12e7a91344d3&language=fr')
.then(res => res.json())
.then(res =>
    res.results.forEach((data, index) => {
        setTimeout(() => {
            create_news(data);
        }, 5000*index);
    }))

const create_news = (data) => {
    document.getElementById('rubrik').innerHTML = data.title;
    document.getElementById('bild').src = data.image_url;
    document.getElementById('details_news').innerHTML = data.content;
    document.getElementById('update').innerHTML = data.pubDate;
}

// let obj = {
//     title: "Hello World",
//     image_url: "https://bildix.mmcloud.se/bildix/api/images/15b905b4-aca3-49ee-8619-dfb45b4d0670.jpeg",
//     content: "HEJEHEJEOjifbneioferhgbaopuislfhaweuiofhashpufilsdx",
//     pubDate: "2023-10-10"
// }

// create_news(obj);