const API_URL = 'https://api.themoviedb.org/3/discover/movie?sort_by=popularity.desc&api_key=3fd2be6f0c70a2a598f084ddfb75487c&page=1'
const API_URL2='https://api.themoviedb.org/3/movie/top_rated?api_key=3fd2be6f0c70a2a598f084ddfb75487c&language=en-US&page=1'
const API_URL3='https://api.themoviedb.org/3/movie/upcoming?api_key=3fd2be6f0c70a2a598f084ddfb75487c&language=en-US&page=1'
const API_URL4='https://api.themoviedb.org/3/tv/top_rated?api_key=044f8f94ee053fbd82a35735e17ec2af&language=en-US&page=1'
const IMG_PATH = 'https://image.tmdb.org/t/p/w1280'
const SEARCH_API ='https://api.themoviedb.org/3/search/movie?api_key=3fd2be6f0c70a2a598f084ddfb75487c&query="'
const Base_URL='https://api.themoviedb.org/3/'
const Rest_URL='/videos?api_key=044f8f94ee053fbd82a35735e17ec2af'
const main = document.querySelector('.list1')
const main2 = document.querySelector('.list2')
const main3 = document.querySelector('.list3')
const main4 = document.querySelector('.list4')

const form = document.querySelector('.form')
const search = document.getElementById('search')
const body = document.querySelector('.main')
const valid = document.querySelector('.valid')

getMovies(API_URL,main,52,13)
getMovies(API_URL2,main2,63,21)
getMovies(API_URL3,main3,60,13)
getMovies(API_URL4,main4,69,21)

function renameKey(obj,oldkey,newkey){
    obj[newkey]=obj[oldkey]
    delete obj[oldkey]
}

async function getMovies(url,area,i,inc) {
    const res = await fetch(url)
    const data = await res.json()
    if(url==API_URL4)
    {
        data.results.map(obj=>renameKey(obj,'name','title'))
        data.results.map(obj=>renameKey(obj,'first_air_date','release_date'))
    }
    showMovies(data.results,area,i,inc)
}

function showMovies(movies,area,i,inc) {
    area.innerHTML = ''
    movies.forEach((movie) => {
        const { title, poster_path,overview } = movie

        const movieEl = document.createElement('div')
        const pair = document.createElement('div')
        const review = document.createElement('div')
        movieEl.classList.add('movie')
        pair.classList.add('review')
        review.innerHTML=`
        <span class="rating">Rating <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></span>
        <span class="comment"><img src="images/comments.gif" alt=""> ${i+=inc}</span>`
        movieEl.innerHTML = `
            <img src="${IMG_PATH + poster_path}">
            <div class="overview">
                <div class="movie-info">
                      ${title}
                </div>
                      ${overview}
            </div>`
            pair.append(movieEl)
            pair.append(review)
        area.appendChild(pair)
    })
   
}

async function searchMovies(url, items) {
    const res = await fetch(url)
    const data = await res.json()
    showlist(data.results,items)
}

function showlist(movies,items) {

    items.innerHTML = `<div class="srch-results"><span><h2>Search Results:</h2></span>
    <span class="cut" onclick="remove()"><h2>X</h2></span></div>`
    const searchresult=document.createElement('div')
    searchresult.classList.add('results')
    searchresult.innerHTML=''
    if(movies.length==0)
       searchresult.innerHTML=`<p class="nofound"><h3>Sorry! Movie not found...</h3></>`
    movies.forEach((movie) => {
        const { title, poster_path,overview } = movie
        const movieEl = document.createElement('div')
        const pair = document.createElement('div')
        const review = document.createElement('div')
        movieEl.classList.add('movie')
        pair.classList.add('review')
        review.innerHTML=`
        <span class="rating">Rating <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></span>
        <span class="comment"><img src="images/comments.gif" alt=""> 95</span>`
        movieEl.innerHTML = `
            <img src="${IMG_PATH + poster_path}">
            <div class="overview">
                <div class="movie-info">
                      ${title}
                </div>
                      ${overview}
            </div>`
            pair.append(movieEl)
            pair.append(review)
            searchresult.append(pair)
    })
    items.appendChild(searchresult)
    searchresult.addEventListener('click',(e)=>{
        let v=''
        if(e.target.className=="overview"){
            v=e.target.childNodes[1].innerText
        }
        if(e.target.className=="movie-info"){
            v=e.target.innerText
        }
        if(v!='')
        {   
            getinfo(SEARCH_API+v,v,-1)
        }
    })
}


form.addEventListener('submit', (e) => {
    e.preventDefault()
    const searchTerm = search.value
    if(searchTerm && searchTerm !== '') {
        const items = document.createElement('div')
        items.classList.add('srch-item')
        body.append(items);
        searchMovies(SEARCH_API + searchTerm,items)
        search.value = ''
    } else {
        console.log('no data found')
        window.location.reload()
    }    
        window.scrollTo(0,0);   
})

const remove=(val)=>{
    if(val==1)
    {
    const rmv=document.querySelector('.srch-item')
    rmv.innerHTML=''
    rmv.remove();
    }
    else{
    window.location.reload()}
}



valid.addEventListener('click',(e)=>{
   
    let v='';
    v=e.target.parentNode.childNodes; 
    if(e.target.className=="overview"){
        v=e.target.parentNode.childNodes[1];
    }
    if(e.target.className=="movie-info"){
        v=e.target.parentNode.parentNode.childNodes[1];
    }
    if(v.src!=null && e.target.innerHTML!='X')
    {
        if(v.parentNode.parentNode.parentNode.className=="list list1")
        {
         getinfo(API_URL,v.src,1)
        }
        if(v.parentNode.parentNode.parentNode.className=="list2 list")
        {
         getinfo(API_URL2,v.src,1)
        }
        if(v.parentNode.parentNode.parentNode.className=="list3 list")
        {
         getinfo(API_URL3,v.src,1)
        }
        if(v.parentNode.parentNode.parentNode.className=="list4 list")
        {
         getinfo(API_URL4,v.src,1)
        }
    }
     
})


async function getinfo(url,target,val) {
    const res = await fetch(url)
    const data = await res.json()
    if(url==API_URL4)
    {
        data.results.map(obj=>renameKey(obj,'name','title'))
        data.results.map(obj=>renameKey(obj,'first_air_date','release_date'))
    }
        showinfo(data.results,target,val,url)
}
function showinfo(movies,target,val,url) {  
    let p=0;
    movies.forEach((movie) => {
       
        const { title, poster_path,overview,backdrop_path
            ,popularity,release_date,vote_average,vote_count,id} = movie 
        if(`${IMG_PATH}${poster_path}`==target && val==1 || title==target && val==-1)
        {
            if(p==0)
            {
                p=1
                console.log(movie)
            const items = document.createElement('div')
            items.classList.add('srch-item')
            items.innerHTML = `<span class="cutbanner" onclick="remove(${val})"><h2>X</h2></span></div>`
            const movieEl = document.createElement('div')
            movieEl.classList.add('.movie')
            movieEl.innerHTML = `
                   
                    <div class="data">
                      <div class="banner">
                       <img src="${IMG_PATH + backdrop_path}">
                       <br/>
                       <img class="vertical" src="${IMG_PATH + poster_path}">
                       </div>
                        <div class="banner-info">
                              <h3 class="title">${title}</h3>
                              <h3 class="imdb">IMDB: ${vote_average}</h3>
                        </div>
                        <div class="extra">
                        <span>RELEASED: ${release_date}</span>
                        <span>POPULARITY: ${popularity}</span>
                        <span>VOTE COUNT: ${vote_count}</span>
                        </div>
                        <br/>
                        <div class="close">
                             OVERVIEW: 
                             <p> ${overview}</p>
                        </div>
                        
                    </div>`
            items.append(movieEl)
            
            let type='movie'
            if(url==API_URL4)
            {
                 type='tv'
            }
           
            getMovies2(Base_URL+type+`/`+id+Rest_URL)
            async function getMovies2(url) {
               const res = await fetch(url)
               const data = await res.json()  
               showMovies2(data.results,items)
           }
            body.append(items);
            window.scrollTo(0,0);
        }
        } 
    }) 
    p=0;
}



function showMovies2(play,items)
{
    if(play.length>0)
    {
        let embade = document.createElement('div')
        embade.classList.add('embade') 
        play.find(video=>{
            let {name,key,site}=video
            // console.log(video)
            if(site=='YouTube')
            {
                embade.innerHTML=`<iframe width="340"
                height="200" src="https://www.youtube.com/embed/${key}" title="${name}" 
                frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
                encrypted-media; gyroscope; picture-in-picture; 
                web-share" allowfullscreen></iframe>`
            }
        })

        items.append(embade)
    }
    else{
        extra=document.querySelector(".extra")
        extra.style["margin-top"]="0px"
    }
}



