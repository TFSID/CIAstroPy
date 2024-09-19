import React from 'react';
import {marked} from 'marked';
import highlightjs from 'highlight.js';
import 'highlight.js/styles/github.css';

const PreviewHTML = ({ markdown }) => {
  const html = marked(markdown, {
    highlight: function(code, lang) {
      const language = highlightjs.getLanguage(lang) ? lang : 'plaintext';
      return highlightjs.highlight(code, { language }).value;
    },
    breaks: true,
  });

  return (
    <div
      id="preview"
      className="preview"
      dangerouslySetInnerHTML={{ __html: html }}
    />
  );
};

export default PreviewHTML;