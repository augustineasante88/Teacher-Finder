import { annotate } from 'https://unpkg.com/rough-notation?module';

const e = document.querySelector('#selector');
const annotation = annotate(e, { type: 'box', color: '#b01515' });
annotation.show();

const r = document.querySelector('#aboutUs');
const annotations = annotate(r, { type: 'highlight', color: 'yellow' });
annotations.show();

const s = document.querySelector('#aboutUs2');
const annotationss = annotate(s, { type: 'underline', color: 'red' });
annotationss.show();

const o = document.querySelector('#our1');
const annotationo = annotate(o, { type: 'underline', color: '#52525b' });
annotationo.show();

const p = document.querySelector('#our2');
const annotationoo = annotate(p, { type: 'highlight', color: '#fdba74' });
annotationoo.show();

const q = document.querySelector('#our3');
const annotationooo = annotate(q, { type: 'box', color: 'green' });
annotationooo.show();