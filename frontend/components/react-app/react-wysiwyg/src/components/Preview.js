// src/components/Preview.js
import React from 'react';
import {marked} from 'marked';
import highlightjs from 'highlight.js';
import 'highlight.js/styles/github.css';

const Preview = ({ markdown }) => {
  const renderer = new marked.Renderer();

  marked.setOptions({
    renderer,
    highlight: function(code, lang) {
      const language = highlightjs.getLanguage(lang) ? lang : 'plaintext';
      return highlightjs.highlight(code, { language }).value;
    },
    breaks: true,
  });

  const html = marked(markdown);
  console.log(marked.parse(markdown))

  return (
    <div
      className="preview"
      dangerouslySetInnerHTML={{ __html: html }}
    />
  );
};

export default Preview;