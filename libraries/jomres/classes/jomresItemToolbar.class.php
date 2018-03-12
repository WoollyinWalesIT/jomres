
<
?
p
h
p

/
*
*

 
*
 
C
o
r
e
 
f
i
l
e
.

 
*

 
*
 
@
a
u
t
h
o
r
 
V
i
n
c
e
 
W
o
o
l
l
 
<
s
a
l
e
s
@
j
o
m
r
e
s
.
n
e
t
>

 
*

 
*
 
@
v
e
r
s
i
o
n
 
J
o
m
r
e
s
 
9
.
1
0
.
0
-
c
h
a
r
l
i
e

 
*

 
*
 
@
c
o
p
y
r
i
g
h
t
	
2
0
0
5
-
2
0
1
8
 
V
i
n
c
e
 
W
o
o
l
l

 
*
 
J
o
m
r
e
s
 
(
t
m
)
 
P
H
P
,
 
C
S
S
 
&
 
J
a
v
a
s
c
r
i
p
t
 
f
i
l
e
s
 
a
r
e
 
r
e
l
e
a
s
e
d
 
u
n
d
e
r
 
b
o
t
h
 
M
I
T
 
a
n
d
 
G
P
L
2
 
l
i
c
e
n
s
e
s
.
 
T
h
i
s
 
m
e
a
n
s
 
t
h
a
t
 
y
o
u
 
c
a
n
 
c
h
o
o
s
e
 
t
h
e
 
l
i
c
e
n
s
e
 
t
h
a
t
 
b
e
s
t
 
s
u
i
t
s
 
y
o
u
r
 
p
r
o
j
e
c
t
,
 
a
n
d
 
u
s
e
 
i
t
 
a
c
c
o
r
d
i
n
g
l
y

 
*
*
/


/
/
 
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#

d
e
f
i
n
e
d
(
'
_
J
O
M
R
E
S
_
I
N
I
T
C
H
E
C
K
'
)
 
o
r
 
d
i
e
(
'
'
)
;

/
/
 
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#


c
l
a
s
s
 
j
o
m
r
e
s
I
t
e
m
T
o
o
l
b
a
r

{

	
p
r
i
v
a
t
e
 
s
t
a
t
i
c
 
$
c
o
n
f
i
g
I
n
s
t
a
n
c
e
;


 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
_
_
c
o
n
s
t
r
u
c
t
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
n
e
w
T
o
o
l
b
a
r
(
)
;

 
 
 
 
}


 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
n
e
w
T
o
o
l
b
a
r
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
t
o
o
l
b
a
r
 
=
 
'
'
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
t
e
m
s
 
=
 
a
r
r
a
y
(
)
;

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
e
c
o
n
d
a
r
y
I
t
e
m
s
 
=
 
a
r
r
a
y
(
)
;

 
 
 
 
}

	

	
p
u
b
l
i
c
 
s
t
a
t
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
I
n
s
t
a
n
c
e
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
!
s
e
l
f
:
:
$
c
o
n
f
i
g
I
n
s
t
a
n
c
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
s
e
l
f
:
:
$
c
o
n
f
i
g
I
n
s
t
a
n
c
e
 
=
 
n
e
w
 
s
e
l
f
(
)
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
s
e
l
f
:
:
$
c
o
n
f
i
g
I
n
s
t
a
n
c
e
;

 
 
 
 
}


 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
a
d
d
I
t
e
m
(
$
i
c
o
n
,
 
$
b
u
t
t
o
n
C
l
a
s
s
,
 
$
t
a
s
k
,
 
$
l
i
n
k
,
 
$
t
i
t
l
e
,
 
$
s
u
b
m
i
t
O
n
C
l
i
c
k
 
=
 
f
a
l
s
e
,
 
$
o
t
h
e
r
P
a
r
a
m
s
 
=
 
'
'
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
t
i
t
l
e
 
=
 
s
t
r
_
r
e
p
l
a
c
e
(
"
'
"
,
 
"
\
'
"
,
 
$
t
i
t
l
e
)
;

 
 
 
 
 
 
 
 
$
t
i
t
l
e
 
=
 
s
t
r
_
r
e
p
l
a
c
e
(
'
&
#
3
9
;
'
,
 
"
\
'
"
,
 
$
t
i
t
l
e
)
;


 
 
 
 
 
 
 
 
i
f
 
(
$
s
u
b
m
i
t
O
n
C
l
i
c
k
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
i
t
e
m
 
=
 
'
<
a
 
c
l
a
s
s
=
"
'
.
$
b
u
t
t
o
n
C
l
a
s
s
.
'
 
b
t
n
-
s
m
"
 
h
r
e
f
=
"
j
a
v
a
s
c
r
i
p
t
:
j
o
m
r
e
s
_
s
u
b
m
i
t
b
u
t
t
o
n
(
\
'
'
.
$
t
a
s
k
.
'
\
'
)
;
"
 
'
.
$
o
t
h
e
r
P
a
r
a
m
s
.
'
>
<
i
 
c
l
a
s
s
=
"
'
.
$
i
c
o
n
.
'
"
>
<
/
i
>
 
'
.
$
t
i
t
l
e
.
'
<
/
a
>
 
'
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
i
t
e
m
 
=
 
'
<
a
 
c
l
a
s
s
=
"
'
.
$
b
u
t
t
o
n
C
l
a
s
s
.
'
 
b
t
n
-
s
m
"
 
h
r
e
f
=
"
'
.
$
l
i
n
k
.
'
"
 
'
.
$
o
t
h
e
r
P
a
r
a
m
s
.
'
>
<
i
 
c
l
a
s
s
=
"
'
.
$
i
c
o
n
.
'
"
>
<
/
i
>
 
'
.
$
t
i
t
l
e
.
'
<
/
a
>
 
'
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
i
t
e
m
s
[
]
 
=
 
$
i
t
e
m
;


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
t
h
i
s
-
>
i
t
e
m
s
;

 
 
 
 
}


 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
a
d
d
S
e
c
o
n
d
a
r
y
I
t
e
m
(
$
i
c
o
n
,
 
$
b
u
t
t
o
n
C
l
a
s
s
,
 
$
t
a
s
k
,
 
$
l
i
n
k
,
 
$
t
i
t
l
e
,
 
$
s
u
b
m
i
t
O
n
C
l
i
c
k
 
=
 
f
a
l
s
e
,
 
$
o
t
h
e
r
P
a
r
a
m
s
 
=
 
'
'
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
t
i
t
l
e
 
=
 
s
t
r
_
r
e
p
l
a
c
e
(
"
'
"
,
 
"
\
'
"
,
 
$
t
i
t
l
e
)
;

 
 
 
 
 
 
 
 
$
t
i
t
l
e
 
=
 
s
t
r
_
r
e
p
l
a
c
e
(
'
&
#
3
9
;
'
,
 
"
\
'
"
,
 
$
t
i
t
l
e
)
;


 
 
 
 
 
 
 
 
$
i
t
e
m
 
=
 
'
<
a
 
t
a
b
i
n
d
e
x
=
"
-
1
"
 
h
r
e
f
=
"
'
.
$
l
i
n
k
.
'
"
>
<
i
 
c
l
a
s
s
=
"
'
.
$
i
c
o
n
.
'
"
>
<
/
i
>
 
'
.
$
t
i
t
l
e
.
'
<
/
a
>
 
'
;


 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
e
c
o
n
d
a
r
y
I
t
e
m
s
[
]
 
=
 
$
i
t
e
m
;


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
t
h
i
s
-
>
s
e
c
o
n
d
a
r
y
I
t
e
m
s
;

 
 
 
 
}


 
 
 
 
p
u
b
l
i
c
 
f
u
n
c
t
i
o
n
 
g
e
t
T
o
o
l
b
a
r
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
t
o
o
l
b
a
r
 
=
 
'
<
d
i
v
 
i
d
=
"
j
o
m
r
e
s
-
i
t
e
m
-
t
o
o
l
b
a
r
"
 
c
l
a
s
s
=
"
b
t
n
-
g
r
o
u
p
"
>
'
;


 
 
 
 
 
 
 
 
i
f
 
(
!
e
m
p
t
y
(
$
t
h
i
s
-
>
i
t
e
m
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
t
h
i
s
-
>
i
t
e
m
s
 
a
s
 
$
i
t
e
m
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
t
o
o
l
b
a
r
 
.
=
 
$
i
t
e
m
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
!
e
m
p
t
y
(
$
t
h
i
s
-
>
s
e
c
o
n
d
a
r
y
I
t
e
m
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
j
o
m
r
e
s
_
b
o
o
t
s
t
r
a
p
_
v
e
r
s
i
o
n
(
)
 
=
=
 
'
3
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
t
o
o
l
b
a
r
 
.
=
 
'
<
a
 
c
l
a
s
s
=
"
b
t
n
 
b
t
n
-
s
m
 
b
t
n
-
d
e
f
a
u
l
t
 
d
r
o
p
d
o
w
n
-
t
o
g
g
l
e
"
 
d
a
t
a
-
t
o
g
g
l
e
=
"
d
r
o
p
d
o
w
n
"
 
h
r
e
f
=
"
#
"
>
 
<
s
p
a
n
 
c
l
a
s
s
=
"
c
a
r
e
t
"
>
<
/
s
p
a
n
>
<
/
a
>
<
u
l
 
c
l
a
s
s
=
"
d
r
o
p
d
o
w
n
-
m
e
n
u
"
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
t
o
o
l
b
a
r
 
.
=
 
'
<
a
 
c
l
a
s
s
=
"
b
t
n
 
d
r
o
p
d
o
w
n
-
t
o
g
g
l
e
"
 
d
a
t
a
-
t
o
g
g
l
e
=
"
d
r
o
p
d
o
w
n
"
 
h
r
e
f
=
"
#
"
>
'
.
j
r
_
g
e
t
t
e
x
t
(
'
C
O
M
M
O
N
_
M
O
R
E
'
,
 
'
C
O
M
M
O
N
_
M
O
R
E
'
,
 
f
a
l
s
e
)
.
'
 
<
s
p
a
n
 
c
l
a
s
s
=
"
c
a
r
e
t
"
>
<
/
s
p
a
n
>
<
/
a
>
<
u
l
 
c
l
a
s
s
=
"
d
r
o
p
d
o
w
n
-
m
e
n
u
"
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
t
h
i
s
-
>
s
e
c
o
n
d
a
r
y
I
t
e
m
s
 
a
s
 
$
s
e
c
o
n
d
a
r
y
I
t
e
m
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
t
o
o
l
b
a
r
 
.
=
 
'
<
l
i
>
'
.
$
s
e
c
o
n
d
a
r
y
I
t
e
m
.
'
<
/
l
i
>
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
t
o
o
l
b
a
r
 
.
=
 
'
<
/
u
l
>
'
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
t
o
o
l
b
a
r
 
.
=
 
'
<
/
d
i
v
>
'
;


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
t
h
i
s
-
>
t
o
o
l
b
a
r
;

 
 
 
 
}

}

