export const api=(name)=>{
    const apis={
        'MAIN_PAGE_CARDS':'/api/main/contents',
        'MAIN_PAGE_SLIDERS':'/api/main/news'
    }
    return apis[name];
}
