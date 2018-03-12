
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
l
i
s
t
_
t
a
x
r
a
t
e
s

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
e
d
i
t
I
c
o
n
 
=
 
'
<
i
m
g
 
s
r
c
=
"
'
.
J
O
M
R
E
S
_
I
M
A
G
E
S
_
R
E
L
P
A
T
H
.
'
j
o
m
r
e
s
i
m
a
g
e
s
/
s
m
a
l
l
/
E
d
i
t
I
t
e
m
.
p
n
g
"
 
b
o
r
d
e
r
=
"
0
"
 
a
l
t
=
"
e
d
i
t
i
c
o
n
"
 
/
>
'
;


 
 
 
 
 
 
 
 
$
j
r
p
o
r
t
a
l
_
t
a
x
r
a
t
e
 
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
r
p
o
r
t
a
l
_
t
a
x
r
a
t
e
'
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
r
o
w
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
o
u
t
p
u
t
[
 
'
P
A
G
E
T
I
T
L
E
'
 
]
 
=
 
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
R
P
O
R
T
A
L
_
T
A
X
R
A
T
E
S
_
T
I
T
L
E
'
,
 
'
_
J
R
P
O
R
T
A
L
_
T
A
X
R
A
T
E
S
_
T
I
T
L
E
'
,
 
f
a
l
s
e
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
H
C
O
D
E
'
 
]
 
=
 
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
R
P
O
R
T
A
L
_
T
A
X
R
A
T
E
S
_
C
O
D
E
'
,
 
'
_
J
R
P
O
R
T
A
L
_
T
A
X
R
A
T
E
S
_
C
O
D
E
'
,
 
f
a
l
s
e
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
H
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
R
P
O
R
T
A
L
_
T
A
X
R
A
T
E
S
_
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
,
 
'
_
J
R
P
O
R
T
A
L
_
T
A
X
R
A
T
E
S
_
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
,
 
f
a
l
s
e
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
H
R
A
T
E
'
 
]
 
=
 
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
R
P
O
R
T
A
L
_
T
A
X
R
A
T
E
S
_
R
A
T
E
'
,
 
'
_
J
R
P
O
R
T
A
L
_
T
A
X
R
A
T
E
S
_
R
A
T
E
'
,
 
f
a
l
s
e
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
_
J
O
M
R
E
S
_
I
S
_
E
U
_
C
O
U
N
T
R
Y
'
 
]
 
=
 
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
I
S
_
E
U
_
C
O
U
N
T
R
Y
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
I
S
_
E
U
_
C
O
U
N
T
R
Y
'
,
 
f
a
l
s
e
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
_
J
O
M
R
E
S
_
T
A
X
_
R
A
T
E
S
_
I
M
P
O
R
T
'
 
]
 
=
 
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
T
A
X
_
R
A
T
E
S
_
I
M
P
O
R
T
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
T
A
X
_
R
A
T
E
S
_
I
M
P
O
R
T
'
,
 
f
a
l
s
e
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
_
J
O
M
R
E
S
_
T
A
X
_
R
A
T
E
S
_
I
M
P
O
R
T
_
I
N
F
O
'
 
]
 
=
 
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
T
A
X
_
R
A
T
E
S
_
I
M
P
O
R
T
_
I
N
F
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
T
A
X
_
R
A
T
E
S
_
I
M
P
O
R
T
_
I
N
F
O
'
,
 
f
a
l
s
e
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
M
P
O
R
T
_
L
I
N
K
'
]
 
=
 
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
i
m
p
o
r
t
_
e
u
_
t
a
x
_
r
a
t
e
s
'
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
j
r
p
o
r
t
a
l
_
t
a
x
r
a
t
e
-
>
t
a
x
r
a
t
e
s
 
a
s
 
$
r
a
t
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
r
 
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
r
[
 
'
I
D
'
 
]
 
=
 
$
r
a
t
e
[
 
'
i
d
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
C
O
D
E
'
 
]
 
=
 
$
r
a
t
e
[
 
'
c
o
d
e
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
r
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
r
a
t
e
[
 
'
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
r
[
 
'
R
A
T
E
'
 
]
 
=
 
$
r
a
t
e
[
 
'
r
a
t
e
'
 
]
;


 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
'
I
S
_
E
U
_
C
O
U
N
T
R
Y
'
]
 
=
 
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
;

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
r
a
t
e
[
 
'
i
s
_
e
u
_
c
o
u
n
t
r
y
'
 
]
 
=
=
 
'
1
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
'
I
S
_
E
U
_
C
O
U
N
T
R
Y
'
]
 
=
 
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
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
u
s
i
n
g
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
(
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
 
'
E
D
I
T
L
I
N
K
'
 
]
 
=
 
'
<
a
 
h
r
e
f
=
"
'
.
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
e
d
i
t
_
t
a
x
r
a
t
e
&
i
d
=
'
.
$
r
a
t
e
[
 
'
i
d
'
 
]
.
'
"
>
'
.
$
e
d
i
t
I
c
o
n
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
t
o
o
l
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
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
o
o
l
b
a
r
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
o
o
l
b
a
r
-
>
a
d
d
I
t
e
m
(
'
f
a
 
f
a
-
p
e
n
c
i
l
-
s
q
u
a
r
e
-
o
'
,
 
'
b
t
n
 
b
t
n
-
i
n
f
o
'
,
 
'
'
,
 
j
o
m
r
e
s
U
R
L
(
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
e
d
i
t
_
t
a
x
r
a
t
e
&
i
d
=
'
.
$
r
a
t
e
[
 
'
i
d
'
 
]
)
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
C
O
M
M
O
N
_
E
D
I
T
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
E
D
I
T
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
t
o
o
l
b
a
r
-
>
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
'
f
a
 
f
a
-
t
r
a
s
h
-
o
'
,
 
'
'
,
 
'
'
,
 
j
o
m
r
e
s
U
R
L
(
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
d
e
l
e
t
e
_
t
a
x
r
a
t
e
&
i
d
=
'
.
$
r
a
t
e
[
 
'
i
d
'
 
]
)
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
C
O
M
M
O
N
_
D
E
L
E
T
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
D
E
L
E
T
E
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
r
[
'
E
D
I
T
L
I
N
K
'
]
 
=
 
$
t
o
o
l
b
a
r
-
>
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
;

 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
$
r
o
w
s
[
 
]
 
=
 
$
r
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
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
 
j
o
m
r
e
s
U
R
L
(
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
)
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
n
e
w
'
,
 
j
o
m
r
e
s
U
R
L
(
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
e
d
i
t
_
t
a
x
r
a
t
e
'
)
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
l
i
s
t
_
t
a
x
r
a
t
e
s
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
r
o
w
s
'
,
 
$
r
o
w
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

