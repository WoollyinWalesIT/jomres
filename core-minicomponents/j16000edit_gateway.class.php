
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
1
6
0
0
0
e
d
i
t
_
g
a
t
e
w
a
y

{

 
 
 
 
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

 
 
 
 
 
 
 
 
/
/
 
M
u
s
t
 
b
e
 
i
n
 
a
l
l
 
m
i
n
i
c
o
m
p
o
n
e
n
t
s
.
 
M
i
n
i
c
o
m
p
o
n
e
n
t
s
 
w
i
t
h
 
t
e
m
p
l
a
t
e
s
 
t
h
a
t
 
c
a
n
 
c
o
n
t
a
i
n
 
e
d
i
t
a
b
l
e
 
t
e
x
t
 
s
h
o
u
l
d
 
r
u
n
 
$
t
h
i
s
-
>
t
e
m
p
l
a
t
e
_
t
o
u
c
h
(
)
 
e
l
s
e
 
j
u
s
t
 
r
e
t
u
r
n

 
 
 
 
 
 
 
 
$
M
i
n
i
C
o
m
p
o
n
e
n
t
s
 
=
 
j
o
m
r
e
s
_
s
i
n
g
l
e
t
o
n
_
a
b
s
t
r
a
c
t
:
:
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
'
m
c
H
a
n
d
l
e
r
'
)
;

 
 
 
 
 
 
 
 
i
f
 
(
$
M
i
n
i
C
o
m
p
o
n
e
n
t
s
-
>
t
e
m
p
l
a
t
e
_
t
o
u
c
h
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
e
m
p
l
a
t
e
_
t
o
u
c
h
a
b
l
e
 
=
 
f
a
l
s
e
;


 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
p
l
u
g
i
n
 
=
 
j
o
m
r
e
s
G
e
t
P
a
r
a
m
(
$
_
R
E
Q
U
E
S
T
,
 
'
p
l
u
g
i
n
'
,
 
'
'
)
;


 
 
 
 
 
 
 
 
/
/
$
s
e
t
t
i
n
g
s
 
=
 
g
e
t
_
p
l
u
g
i
n
_
s
e
t
t
i
n
g
s
(
$
t
h
i
s
-
>
p
l
u
g
i
n
)
;
 
/
/
 
C
a
n
'
t
 
u
s
e
 
g
e
t
_
p
l
u
g
i
n
_
s
e
t
t
i
n
g
s
 
h
e
r
e
 
a
s
 
y
o
u
'
l
l
 
d
i
s
a
p
p
e
a
r
 
d
o
w
n
 
t
h
e
 
r
e
c
u
r
s
i
o
n
 
r
a
b
b
i
t
h
o
l
e
.

 
 
 
 
 
 
 
 
$
c
u
r
r
e
n
t
_
s
e
t
t
i
n
g
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
q
u
e
r
y
 
=
 
"
S
E
L
E
C
T
 
s
e
t
t
i
n
g
,
v
a
l
u
e
 
F
R
O
M
 
#
_
_
j
o
m
r
e
s
_
p
l
u
g
i
n
s
e
t
t
i
n
g
s
 
W
H
E
R
E
 
p
r
i
d
 
=
 
0
 
A
N
D
 
p
l
u
g
i
n
 
=
 
'
"
.
$
t
h
i
s
-
>
p
l
u
g
i
n
.
"
'
 
"
;

 
 
 
 
 
 
 
 
$
s
e
t
t
i
n
g
s
L
i
s
t
 
=
 
d
o
S
e
l
e
c
t
S
q
l
(
$
q
u
e
r
y
)
;

 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
s
e
t
t
i
n
g
s
L
i
s
t
 
a
s
 
$
s
e
t
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
c
u
r
r
e
n
t
_
s
e
t
t
i
n
g
s
[
 
$
s
e
t
-
>
s
e
t
t
i
n
g
 
]
 
=
 
$
s
e
t
-
>
v
a
l
u
e
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
'
G
A
T
E
W
A
Y
'
]
 
=
 
$
t
h
i
s
-
>
p
l
u
g
i
n
;


 
 
 
 
 
 
 
 
$
s
e
t
t
i
n
g
s
 
=
 
$
M
i
n
i
C
o
m
p
o
n
e
n
t
s
-
>
s
p
e
c
i
f
i
c
E
v
e
n
t
(
'
1
0
5
1
0
'
,
 
$
t
h
i
s
-
>
p
l
u
g
i
n
)
;

 
 
 
 
 
 
 
 
$
a
c
t
i
v
e
[
'
a
c
t
i
v
e
'
]
 
=
 
a
r
r
a
y
(

 
 
 
 
 
 
 
 
 
 
 
 
'
d
e
f
a
u
l
t
'
 
=
>
 
'
0
'
,

 
 
 
 
 
 
 
 
 
 
 
 
'
s
e
t
t
i
n
g
_
t
i
t
l
e
'
 
=
>
 
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
_
J
O
M
R
E
S
_
S
T
A
T
U
S
_
A
C
T
I
V
E
'
,
 
'
_
J
O
M
R
E
S
_
S
T
A
T
U
S
_
A
C
T
I
V
E
'
)
,

 
 
 
 
 
 
 
 
 
 
 
 
'
s
e
t
t
i
n
g
_
d
e
s
c
r
i
p
t
i
o
n
'
 
=
>
 
'
'
,

 
 
 
 
 
 
 
 
 
 
 
 
'
f
o
r
m
a
t
'
 
=
>
 
'
b
o
o
l
e
a
n
'
,

 
 
 
 
 
 
 
 
 
 
 
 
)
;


 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
a
l
l
_
s
e
t
t
i
n
g
s
 
=
 
a
r
r
a
y
_
m
e
r
g
e
(
$
a
c
t
i
v
e
,
 
$
s
e
t
t
i
n
g
s
[
'
s
e
t
t
i
n
g
s
'
]
)
;


 
 
 
 
 
 
 
 
$
r
e
s
u
l
t
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
a
l
l
_
s
e
t
t
i
n
g
s
 
a
s
 
$
k
e
y
 
=
>
 
$
s
e
t
t
i
n
g
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
i
s
s
e
t
(
$
c
u
r
r
e
n
t
_
s
e
t
t
i
n
g
s
[
$
k
e
y
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
t
t
i
n
g
[
'
d
e
f
a
u
l
t
'
]
 
=
 
$
c
u
r
r
e
n
t
_
s
e
t
t
i
n
g
s
[
$
k
e
y
]
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
s
w
i
t
c
h
 
(
$
s
e
t
t
i
n
g
[
'
f
o
r
m
a
t
'
]
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
b
o
o
l
e
a
n
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
s
u
l
t
s
[
]
 
=
 
$
t
h
i
s
-
>
g
e
t
_
s
n
i
p
p
e
t
_
b
o
o
l
(
$
k
e
y
,
 
$
s
e
t
t
i
n
g
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
c
u
r
r
e
n
c
y
c
o
d
e
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
s
u
l
t
s
[
]
 
=
 
$
t
h
i
s
-
>
g
e
t
_
s
n
i
p
p
e
t
_
c
u
r
r
e
n
c
y
c
o
d
e
(
$
k
e
y
,
 
$
s
e
t
t
i
n
g
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
i
n
p
u
t
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
s
u
l
t
s
[
]
 
=
 
$
t
h
i
s
-
>
g
e
t
_
s
n
i
p
p
e
t
_
i
n
p
u
t
(
$
k
e
y
,
 
$
s
e
t
t
i
n
g
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
a
r
e
a
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
s
u
l
t
s
[
]
 
=
 
$
t
h
i
s
-
>
g
e
t
_
s
n
i
p
p
e
t
_
a
r
e
a
(
$
k
e
y
,
 
$
s
e
t
t
i
n
g
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
h
t
m
l
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
s
u
l
t
s
[
]
 
=
 
$
t
h
i
s
-
>
g
e
t
_
s
n
i
p
p
e
t
_
h
t
m
l
(
$
k
e
y
,
 
$
s
e
t
t
i
n
g
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
s
e
l
e
c
t
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
e
s
u
l
t
s
[
]
 
=
 
$
t
h
i
s
-
>
g
e
t
_
s
n
i
p
p
e
t
_
s
e
l
e
c
t
(
$
k
e
y
,
 
$
s
e
t
t
i
n
g
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
d
e
f
a
u
l
t
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
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
r
e
s
u
l
t
s
 
a
s
 
$
r
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
s
n
i
p
p
e
t
s
[
]
[
'
S
N
I
P
P
E
T
'
]
 
=
 
$
r
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
'
N
O
T
E
S
'
]
 
=
 
$
s
e
t
t
i
n
g
s
[
'
n
o
t
e
s
'
]
;


 
 
 
 
 
 
 
 
$
j
r
t
b
a
r
 
=
 
j
o
m
r
e
s
_
s
i
n
g
l
e
t
o
n
_
a
b
s
t
r
a
c
t
:
:
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
'
j
o
m
r
e
s
_
t
o
o
l
b
a
r
'
)
;

 
 
 
 
 
 
 
 
$
j
r
t
b
 
=
 
$
j
r
t
b
a
r
-
>
s
t
a
r
t
T
a
b
l
e
(
)
;


 
 
 
 
 
 
 
 
$
j
r
t
b
 
.
=
 
$
j
r
t
b
a
r
-
>
t
o
o
l
b
a
r
I
t
e
m
(
'
c
a
n
c
e
l
'
,
 
J
O
M
R
E
S
_
S
I
T
E
P
A
G
E
_
U
R
L
_
A
D
M
I
N
.
'
&
t
a
s
k
=
l
i
s
t
_
g
a
t
e
w
a
y
s
'
,
 
'
'
)
;

 
 
 
 
 
 
 
 
$
j
r
t
b
 
.
=
 
$
j
r
t
b
a
r
-
>
t
o
o
l
b
a
r
I
t
e
m
(
'
s
a
v
e
'
,
 
'
'
,
 
'
'
,
 
t
r
u
e
,
 
'
s
a
v
e
_
g
a
t
e
w
a
y
'
)
;

 
 
 
 
 
 
 
 
$
j
r
t
b
 
.
=
 
$
j
r
t
b
a
r
-
>
e
n
d
T
a
b
l
e
(
)
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
 
'
J
O
M
R
E
S
T
O
O
L
B
A
R
'
 
]
 
=
 
$
j
r
t
b
;


 
 
 
 
 
 
 
 
$
p
a
g
e
o
u
t
p
u
t
[
 
]
 
=
 
$
o
u
t
p
u
t
;

 
 
 
 
 
 
 
 
$
t
m
p
l
 
=
 
n
e
w
 
p
a
t
T
e
m
p
l
a
t
e
(
)
;

 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
s
e
t
R
o
o
t
(
J
O
M
R
E
S
_
T
E
M
P
L
A
T
E
P
A
T
H
_
A
D
M
I
N
I
S
T
R
A
T
O
R
)
;

 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
r
e
a
d
T
e
m
p
l
a
t
e
s
F
r
o
m
I
n
p
u
t
(
'
e
d
i
t
_
g
a
t
e
w
a
y
.
h
t
m
l
'
)
;

 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
a
d
d
R
o
w
s
(
'
p
a
g
e
o
u
t
p
u
t
'
,
 
$
p
a
g
e
o
u
t
p
u
t
)
;

 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
a
d
d
R
o
w
s
(
'
s
n
i
p
p
e
t
s
'
,
 
$
s
n
i
p
p
e
t
s
)
;

 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
d
i
s
p
l
a
y
P
a
r
s
e
d
T
e
m
p
l
a
t
e
(
)
;

 
 
 
 
}


 
 
 
 
 
 
 
 
/
/
 
A
l
l
o
w
s
 
g
a
t
e
w
a
y
 
d
e
v
e
l
o
p
e
r
s
 
t
o
 
s
u
p
p
l
y
 
t
h
e
i
r
 
o
w
n
 
h
t
m
l
 
i
f

 
 
 
 
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
_
s
n
i
p
p
e
t
_
h
t
m
l
(
$
k
e
y
,
 
$
s
e
t
t
i
n
g
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
s
i
t
e
C
o
n
f
i
g
 
=
 
j
o
m
r
e
s
_
s
i
n
g
l
e
t
o
n
_
a
b
s
t
r
a
c
t
:
:
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
'
j
o
m
r
e
s
_
c
o
n
f
i
g
_
s
i
t
e
_
s
i
n
g
l
e
t
o
n
'
)
;

 
 
 
 
 
 
 
 
$
j
r
C
o
n
f
i
g
 
=
 
$
s
i
t
e
C
o
n
f
i
g
-
>
g
e
t
(
)
;


 
 
 
 
 
 
 
 
$
i
n
d
e
x
 
=
 
$
k
e
y
;


 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
 
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
p
a
g
e
o
u
t
p
u
t
 
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
o
u
t
p
u
t
[
'
I
N
P
U
T
_
N
A
M
E
'
]
 
=
 
$
i
n
d
e
x
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
'
H
T
M
L
'
]
 
=
 
$
s
e
t
t
i
n
g
[
'
h
t
m
l
'
]
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
'
T
I
T
L
E
'
]
 
=
 
$
s
e
t
t
i
n
g
[
'
s
e
t
t
i
n
g
_
t
i
t
l
e
'
]
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
'
D
E
S
C
R
I
P
T
I
O
N
'
]
 
=
 
$
s
e
t
t
i
n
g
[
'
s
e
t
t
i
n
g
_
d
e
s
c
r
i
p
t
i
o
n
'
]
;


 
 
 
 
 
 
 
 
$
p
a
g
e
o
u
t
p
u
t
[
 
]
 
=
 
$
o
u
t
p
u
t
;

 
 
 
 
 
 
 
 
$
t
m
p
l
 
=
 
n
e
w
 
p
a
t
T
e
m
p
l
a
t
e
(
)
;

 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
s
e
t
R
o
o
t
(
J
O
M
R
E
S
_
T
E
M
P
L
A
T
E
P
A
T
H
_
A
D
M
I
N
I
S
T
R
A
T
O
R
)
;

 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
r
e
a
d
T
e
m
p
l
a
t
e
s
F
r
o
m
I
n
p
u
t
(
'
e
d
i
t
_
g
a
t
e
w
a
y
_
s
n
i
p
p
e
t
_
h
t
m
l
.
h
t
m
l
'
)
;

 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
a
d
d
R
o
w
s
(
'
p
a
g
e
o
u
t
p
u
t
'
,
 
$
p
a
g
e
o
u
t
p
u
t
)
;


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
t
m
p
l
-
>
g
e
t
P
a
r
s
e
d
T
e
m
p
l
a
t
e
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
 
g
e
t
_
s
n
i
p
p
e
t
_
a
r
e
a
(
$
k
e
y
,
 
$
s
e
t
t
i
n
g
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
i
n
d
e
x
 
=
 
$
k
e
y
;


 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
 
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
p
a
g
e
o
u
t
p
u
t
 
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
o
u
t
p
u
t
[
'
I
N
P
U
T
_
N
A
M
E
'
]
 
=
 
$
i
n
d
e
x
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
'
V
A
L
U
E
'
]
 
=
 
$
s
e
t
t
i
n
g
[
'
d
e
f
a
u
l
t
'
]
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
'
T
I
T
L
E
'
]
 
=
 
$
s
e
t
t
i
n
g
[
'
s
e
t
t
i
n
g
_
t
i
t
l
e
'
]
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
'
D
E
S
C
R
I
P
T
I
O
N
'
]
 
=
 
$
s
e
t
t
i
n
g
[
'
s
e
t
t
i
n
g
_
d
e
s
c
r
i
p
t
i
o
n
'
]
;


 
 
 
 
 
 
 
 
$
p
a
g
e
o
u
t
p
u
t
[
 
]
 
=
 
$
o
u
t
p
u
t
;

 
 
 
 
 
 
 
 
$
t
m
p
l
 
=
 
n
e
w
 
p
a
t
T
e
m
p
l
a
t
e
(
)
;

 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
s
e
t
R
o
o
t
(
J
O
M
R
E
S
_
T
E
M
P
L
A
T
E
P
A
T
H
_
A
D
M
I
N
I
S
T
R
A
T
O
R
)
;

 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
r
e
a
d
T
e
m
p
l
a
t
e
s
F
r
o
m
I
n
p
u
t
(
'
e
d
i
t
_
g
a
t
e
w
a
y
_
s
n
i
p
p
e
t
_
a
r
e
a
.
h
t
m
l
'
)
;

 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
a
d
d
R
o
w
s
(
'
p
a
g
e
o
u
t
p
u
t
'
,
 
$
p
a
g
e
o
u
t
p
u
t
)
;


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
t
m
p
l
-
>
g
e
t
P
a
r
s
e
d
T
e
m
p
l
a
t
e
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
 
g
e
t
_
s
n
i
p
p
e
t
_
i
n
p
u
t
(
$
k
e
y
,
 
$
s
e
t
t
i
n
g
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
i
n
d
e
x
 
=
 
$
k
e
y
;


 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
 
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
p
a
g
e
o
u
t
p
u
t
 
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
o
u
t
p
u
t
[
'
I
N
P
U
T
_
N
A
M
E
'
]
 
=
 
$
i
n
d
e
x
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
'
V
A
L
U
E
'
]
 
=
 
$
s
e
t
t
i
n
g
[
'
d
e
f
a
u
l
t
'
]
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
'
T
I
T
L
E
'
]
 
=
 
$
s
e
t
t
i
n
g
[
'
s
e
t
t
i
n
g
_
t
i
t
l
e
'
]
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
'
D
E
S
C
R
I
P
T
I
O
N
'
]
 
=
 
$
s
e
t
t
i
n
g
[
'
s
e
t
t
i
n
g
_
d
e
s
c
r
i
p
t
i
o
n
'
]
;


 
 
 
 
 
 
 
 
$
p
a
g
e
o
u
t
p
u
t
[
 
]
 
=
 
$
o
u
t
p
u
t
;

 
 
 
 
 
 
 
 
$
t
m
p
l
 
=
 
n
e
w
 
p
a
t
T
e
m
p
l
a
t
e
(
)
;

 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
s
e
t
R
o
o
t
(
J
O
M
R
E
S
_
T
E
M
P
L
A
T
E
P
A
T
H
_
A
D
M
I
N
I
S
T
R
A
T
O
R
)
;

 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
r
e
a
d
T
e
m
p
l
a
t
e
s
F
r
o
m
I
n
p
u
t
(
'
e
d
i
t
_
g
a
t
e
w
a
y
_
s
n
i
p
p
e
t
_
i
n
p
u
t
.
h
t
m
l
'
)
;

 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
a
d
d
R
o
w
s
(
'
p
a
g
e
o
u
t
p
u
t
'
,
 
$
p
a
g
e
o
u
t
p
u
t
)
;


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
t
m
p
l
-
>
g
e
t
P
a
r
s
e
d
T
e
m
p
l
a
t
e
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
 
g
e
t
_
s
n
i
p
p
e
t
_
c
u
r
r
e
n
c
y
c
o
d
e
(
$
k
e
y
,
 
$
s
e
t
t
i
n
g
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
i
n
d
e
x
 
=
 
$
k
e
y
;


 
 
 
 
 
 
 
 
$
c
u
r
r
e
n
c
y
_
c
o
d
e
s
 
=
 
j
o
m
r
e
s
_
s
i
n
g
l
e
t
o
n
_
a
b
s
t
r
a
c
t
:
:
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
'
c
u
r
r
e
n
c
y
_
c
o
d
e
s
'
)
;

	
	
$
c
u
r
r
e
n
c
y
_
c
o
d
e
s
_
d
r
o
p
d
o
w
n
 
=
 
$
c
u
r
r
e
n
c
y
_
c
o
d
e
s
-
>
m
a
k
e
C
o
d
e
s
D
r
o
p
d
o
w
n
(
'
'
,
 
f
a
l
s
e
,
 
$
i
n
d
e
x
)
;


 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
 
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
p
a
g
e
o
u
t
p
u
t
 
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
o
u
t
p
u
t
[
'
I
N
P
U
T
_
N
A
M
E
'
]
 
=
 
$
i
n
d
e
x
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
'
S
W
I
T
C
H
'
]
 
=
 
$
c
u
r
r
e
n
c
y
_
c
o
d
e
s
_
d
r
o
p
d
o
w
n
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
'
T
I
T
L
E
'
]
 
=
 
$
s
e
t
t
i
n
g
[
'
s
e
t
t
i
n
g
_
t
i
t
l
e
'
]
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
'
D
E
S
C
R
I
P
T
I
O
N
'
]
 
=
 
$
s
e
t
t
i
n
g
[
'
s
e
t
t
i
n
g
_
d
e
s
c
r
i
p
t
i
o
n
'
]
;


 
 
 
 
 
 
 
 
$
p
a
g
e
o
u
t
p
u
t
[
 
]
 
=
 
$
o
u
t
p
u
t
;

 
 
 
 
 
 
 
 
$
t
m
p
l
 
=
 
n
e
w
 
p
a
t
T
e
m
p
l
a
t
e
(
)
;

 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
s
e
t
R
o
o
t
(
J
O
M
R
E
S
_
T
E
M
P
L
A
T
E
P
A
T
H
_
A
D
M
I
N
I
S
T
R
A
T
O
R
)
;

 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
r
e
a
d
T
e
m
p
l
a
t
e
s
F
r
o
m
I
n
p
u
t
(
'
e
d
i
t
_
g
a
t
e
w
a
y
_
s
n
i
p
p
e
t
_
c
u
r
r
e
n
c
y
c
o
d
e
.
h
t
m
l
'
)
;

 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
a
d
d
R
o
w
s
(
'
p
a
g
e
o
u
t
p
u
t
'
,
 
$
p
a
g
e
o
u
t
p
u
t
)
;


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
t
m
p
l
-
>
g
e
t
P
a
r
s
e
d
T
e
m
p
l
a
t
e
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
 
g
e
t
_
s
n
i
p
p
e
t
_
b
o
o
l
(
$
k
e
y
,
 
$
s
e
t
t
i
n
g
)

 
 
 
 
{

 
 
 
 
 
 
 
 
$
i
n
d
e
x
 
=
 
$
k
e
y
;


 
 
 
 
 
 
 
 
$
y
e
s
n
o
 
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
y
e
s
n
o
[
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
'
0
'
,
 
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
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
N
O
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
N
O
'
,
 
f
a
l
s
e
)
)
;

 
 
 
 
 
 
 
 
$
y
e
s
n
o
[
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
'
1
'
,
 
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
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
Y
E
S
'
,
 
'
_
J
O
M
R
E
S
_
C
O
M
_
M
R
_
Y
E
S
'
,
 
f
a
l
s
e
)
)
;


 
 
 
 
 
 
 
 
$
i
n
p
u
t
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
y
e
s
n
o
,
 
$
i
n
d
e
x
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
$
s
e
t
t
i
n
g
[
'
d
e
f
a
u
l
t
'
]
)
;


 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
 
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
p
a
g
e
o
u
t
p
u
t
 
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
o
u
t
p
u
t
[
'
I
N
P
U
T
_
N
A
M
E
'
]
 
=
 
$
i
n
d
e
x
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
'
S
W
I
T
C
H
'
]
 
=
 
$
i
n
p
u
t
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
'
T
I
T
L
E
'
]
 
=
 
$
s
e
t
t
i
n
g
[
'
s
e
t
t
i
n
g
_
t
i
t
l
e
'
]
;

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
'
D
E
S
C
R
I
P
T
I
O
N
'
]
 
=
 
$
s
e
t
t
i
n
g
[
'
s
e
t
t
i
n
g
_
d
e
s
c
r
i
p
t
i
o
n
'
]
;


 
 
 
 
 
 
 
 
$
p
a
g
e
o
u
t
p
u
t
[
 
]
 
=
 
$
o
u
t
p
u
t
;

 
 
 
 
 
 
 
 
$
t
m
p
l
 
=
 
n
e
w
 
p
a
t
T
e
m
p
l
a
t
e
(
)
;

 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
s
e
t
R
o
o
t
(
J
O
M
R
E
S
_
T
E
M
P
L
A
T
E
P
A
T
H
_
A
D
M
I
N
I
S
T
R
A
T
O
R
)
;

 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
r
e
a
d
T
e
m
p
l
a
t
e
s
F
r
o
m
I
n
p
u
t
(
'
e
d
i
t
_
g
a
t
e
w
a
y
_
s
n
i
p
p
e
t
_
b
o
o
l
.
h
t
m
l
'
)
;

 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
a
d
d
R
o
w
s
(
'
p
a
g
e
o
u
t
p
u
t
'
,
 
$
p
a
g
e
o
u
t
p
u
t
)
;


 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
t
m
p
l
-
>
g
e
t
P
a
r
s
e
d
T
e
m
p
l
a
t
e
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
 
g
e
t
_
s
n
i
p
p
e
t
_
s
e
l
e
c
t
(
$
k
e
y
,
 
$
s
e
t
t
i
n
g
)

 
 
 
 
{

 
 
 
 
 
 
 
 
i
f
 
(
i
s
s
e
t
(
$
s
e
t
t
i
n
g
[
'
o
p
t
i
o
n
s
'
]
)
 
&
&
 
i
s
_
a
r
r
a
y
(
$
s
e
t
t
i
n
g
[
'
o
p
t
i
o
n
s
'
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
i
n
d
e
x
 
=
 
$
k
e
y
;


 
 
 
 
 
 
 
 
 
 
 
 
$
o
p
t
i
o
n
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

 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
$
s
e
t
t
i
n
g
[
'
o
p
t
i
o
n
s
'
]
 
a
s
 
$
s
e
l
e
c
t
i
o
n
 
=
>
 
$
t
e
x
t
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
o
p
t
i
o
n
s
[
]
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
m
a
k
e
O
p
t
i
o
n
(
$
s
e
l
e
c
t
i
o
n
,
 
$
t
e
x
t
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
$
i
n
p
u
t
 
=
 
j
o
m
r
e
s
H
T
M
L
:
:
s
e
l
e
c
t
L
i
s
t
(
$
o
p
t
i
o
n
s
,
 
$
i
n
d
e
x
,
 
'
c
l
a
s
s
=
"
i
n
p
u
t
b
o
x
"
 
s
i
z
e
=
"
1
"
'
,
 
'
v
a
l
u
e
'
,
 
'
t
e
x
t
'
,
 
$
s
e
t
t
i
n
g
[
'
d
e
f
a
u
l
t
'
]
)
;


 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
 
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
p
a
g
e
o
u
t
p
u
t
 
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
o
u
t
p
u
t
[
'
I
N
P
U
T
_
N
A
M
E
'
]
 
=
 
$
i
n
d
e
x
;

 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
'
S
W
I
T
C
H
'
]
 
=
 
$
i
n
p
u
t
;

 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
'
T
I
T
L
E
'
]
 
=
 
$
s
e
t
t
i
n
g
[
'
s
e
t
t
i
n
g
_
t
i
t
l
e
'
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
[
'
D
E
S
C
R
I
P
T
I
O
N
'
]
 
=
 
$
s
e
t
t
i
n
g
[
'
s
e
t
t
i
n
g
_
d
e
s
c
r
i
p
t
i
o
n
'
]
;


 
 
 
 
 
 
 
 
 
 
 
 
$
p
a
g
e
o
u
t
p
u
t
[
 
]
 
=
 
$
o
u
t
p
u
t
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
l
 
=
 
n
e
w
 
p
a
t
T
e
m
p
l
a
t
e
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
s
e
t
R
o
o
t
(
J
O
M
R
E
S
_
T
E
M
P
L
A
T
E
P
A
T
H
_
A
D
M
I
N
I
S
T
R
A
T
O
R
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
r
e
a
d
T
e
m
p
l
a
t
e
s
F
r
o
m
I
n
p
u
t
(
'
e
d
i
t
_
g
a
t
e
w
a
y
_
s
n
i
p
p
e
t
_
s
e
l
e
c
t
.
h
t
m
l
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
l
-
>
a
d
d
R
o
w
s
(
'
p
a
g
e
o
u
t
p
u
t
'
,
 
$
p
a
g
e
o
u
t
p
u
t
)
;


 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
$
t
m
p
l
-
>
g
e
t
P
a
r
s
e
d
T
e
m
p
l
a
t
e
(
)
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
/
/
 
T
h
i
s
 
m
u
s
t
 
b
e
 
i
n
c
l
u
d
e
d
 
i
n
 
e
v
e
r
y
 
E
v
e
n
t
/
M
i
n
i
-
c
o
m
p
o
n
e
n
t

 
 
 
 
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
R
e
t
V
a
l
s
(
)

 
 
 
 
{

 
 
 
 
 
 
 
 
r
e
t
u
r
n
 
n
u
l
l
;

 
 
 
 
}

}

