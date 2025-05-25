FROM amazonlinux:2023

# MeCab及びNEologdに必要な全パッケージをインストール
RUN dnf update -y && \
    dnf install -y \
    gcc \
    gcc-c++ \
    make \
    wget \
    tar \
    xz \
    git \
    which \
    findutils \
    grep \
    sed \
    gzip \
    diffutils \
    file \
    patch \
    sudo \
    openssl \
    && dnf clean all

# プロンプトを設定（現在のディレクトリを表示）
ENV PS1='[\u@\h \w]$ '
RUN echo 'export PS1="[\u@\h \w]$ "' >> /root/.bashrc

WORKDIR /workspace
