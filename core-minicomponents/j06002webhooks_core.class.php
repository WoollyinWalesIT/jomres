
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
0
6
0
0
2
w
e
b
h
o
o
k
s
_
c
o
r
e
 
{

 
 
 
 
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

 
 
 
 
 
 
 
 
 
 
 
 
$
t
h
i
s
-
>
s
h
o
r
t
c
o
d
e
_
d
a
t
a
 
=
 
a
r
r
a
y
 
(

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
"
t
a
s
k
"
 
=
>
 
"
w
e
b
h
o
o
k
s
_
c
o
r
e
"
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
"
i
n
f
o
"
 
=
>
 
"
_
J
O
M
R
E
S
_
S
H
O
R
T
C
O
D
E
S
_
0
6
0
0
5
W
E
B
H
O
O
K
S
_
C
L
I
E
N
T
_
A
D
M
I
N
"
,

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
"
a
r
g
u
m
e
n
t
s
"
 
=
>
 
a
r
r
a
y
 
(
)

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
)
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
P
o
i
n
t
F
i
l
e
p
a
t
h
=
g
e
t
_
s
h
o
w
t
i
m
e
(
'
e
P
o
i
n
t
F
i
l
e
p
a
t
h
'
)
;

 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
$
t
h
i
s
J
R
U
s
e
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
r
_
u
s
e
r
'
 
)
;

 
 
 
 
 
 
 
 
$
m
a
n
a
g
e
r
_
2
_
p
r
o
p
e
r
t
y
_
u
i
d
_
x
r
e
f
_
a
r
r
a
y
 
=
 
b
u
i
l
d
_
p
r
o
p
e
r
t
y
_
m
a
n
a
g
e
r
_
x
r
e
f
_
a
r
r
a
y
(
)
;

 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
/
/
 
W
e
 
d
o
n
'
t
 
u
s
e
 
t
h
e
 
a
u
t
h
o
r
i
s
e
d
P
r
o
p
e
r
t
i
e
s
 
v
a
r
i
a
b
l
e
 
i
n
 
j
r
U
s
e
r
 
b
e
c
a
u
s
e
 
s
u
p
e
r
 
p
r
o
p
e
r
t
y
 
m
a
n
a
g
e
r
s
 
c
o
n
t
a
i
n
 
t
h
e
 
i
d
s
 
o
f
 
a
l
l
 
p
r
o
p
e
r
t
i
e
s
.
 
W
h
e
n
 
a
 
w
e
b
h
o
o
k
 
i
s
 
t
r
i
g
g
e
r
e
d
,
 
t
h
e
 
c
u
r
r
e
n
t
l
y
 
"
a
s
s
i
g
n
e
d
"
 
m
a
n
a
g
e
r
'
s
 
i
d
 
i
s
 
u
s
e
d
 
t
o
 
f
i
n
d
 
w
e
b
h
o
o
k
 
d
a
t
a
,
 
s
o
 
h
e
r
e
 
w
e
 
h
a
v
e
 
t
o
 
f
i
n
d
 
t
h
e
 
a
c
t
u
a
l
 
a
s
s
i
g
n
e
d
 
m
a
n
a
g
e
r
'
s
 
i
d
s
 
a
n
d
 
h
i
g
h
l
i
g
h
t
 
t
o
 
t
h
e
 
u
s
e
r
 
w
h
i
c
h
 
p
r
o
p
e
r
t
i
e
s
 
w
i
l
l
 
a
c
t
u
a
l
l
y
 
h
a
v
e
 
t
h
e
 
c
r
e
a
t
e
d
 
w
e
b
h
o
o
o
k
s
 
t
r
i
g
g
e
r
e
d
 
f
o
r
 
t
h
e
m
.

 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
$
m
a
n
a
g
e
r
_
a
s
s
i
g
n
e
d
_
p
r
o
p
e
r
t
i
e
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
m
a
n
a
g
e
r
_
2
_
p
r
o
p
e
r
t
y
_
u
i
d
_
x
r
e
f
_
a
r
r
a
y
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
m
a
n
a
g
e
r
_
2
_
p
r
o
p
e
r
t
y
_
u
i
d
_
x
r
e
f
_
a
r
r
a
y
 
a
s
 
$
p
r
o
p
e
r
t
y
_
u
i
d
 
=
>
 
$
m
a
n
a
g
e
r
_
i
d
 
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
 
$
m
a
n
a
g
e
r
_
i
d
 
=
=
 
$
t
h
i
s
J
R
U
s
e
r
-
>
i
d
 
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
m
a
n
a
g
e
r
_
a
s
s
i
g
n
e
d
_
p
r
o
p
e
r
t
i
e
s
[
]
 
=
 
$
p
r
o
p
e
r
t
y
_
u
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
i
f
 
(
 
e
m
p
t
y
(
$
m
a
n
a
g
e
r
_
a
s
s
i
g
n
e
d
_
p
r
o
p
e
r
t
i
e
s
)
 
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
M
A
N
A
G
E
R
_
P
R
O
P
E
R
T
I
E
S
_
M
E
S
S
A
G
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
W
E
B
H
O
O
K
S
_
M
A
N
A
G
E
R
_
P
R
O
P
E
R
T
I
E
S
_
N
O
N
E
'
,
 
'
W
E
B
H
O
O
K
S
_
M
A
N
A
G
E
R
_
P
R
O
P
E
R
T
I
E
S
_
N
O
N
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
B
A
C
K
E
N
D
 
 
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
m
a
n
a
g
e
r
_
p
r
o
p
e
r
t
i
e
s
_
n
o
n
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

 
 
 
 
 
 
 
 
 
 
 
 
$
m
a
n
a
g
e
r
_
p
r
o
p
e
r
t
i
e
s
_
t
e
m
p
l
a
t
e
 
=
 
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
 
e
l
s
e
 
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
p
r
o
p
e
r
t
y
_
d
e
t
a
i
l
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
b
a
s
i
c
_
p
r
o
p
e
r
t
y
_
d
e
t
a
i
l
s
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
o
p
e
r
t
y
_
n
a
m
e
s
 
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
p
r
o
p
e
r
t
y
_
d
e
t
a
i
l
s
-
>
g
e
t
_
p
r
o
p
e
r
t
y
_
n
a
m
e
_
m
u
l
t
i
(
$
m
a
n
a
g
e
r
_
a
s
s
i
g
n
e
d
_
p
r
o
p
e
r
t
i
e
s
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

 
 
 
 
 
 
 
 
 
 
 
 
f
o
r
e
a
c
h
 
(
 
$
p
r
o
p
e
r
t
y
_
n
a
m
e
s
 
a
s
 
$
p
r
o
p
e
r
t
y
_
n
a
m
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
P
R
O
P
E
R
T
Y
_
N
A
M
E
'
]
 
=
 
$
p
r
o
p
e
r
t
y
_
n
a
m
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
M
A
N
A
G
E
R
_
P
R
O
P
E
R
T
I
E
S
_
M
E
S
S
A
G
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
W
E
B
H
O
O
K
S
_
M
A
N
A
G
E
R
_
P
R
O
P
E
R
T
I
E
S
_
A
S
S
I
G
N
E
D
_
D
E
S
C
'
,
 
'
W
E
B
H
O
O
K
S
_
M
A
N
A
G
E
R
_
P
R
O
P
E
R
T
I
E
S
_
A
S
S
I
G
N
E
D
_
D
E
S
C
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
R
P
O
R
T
A
L
_
P
R
O
P
E
R
T
I
E
S
_
P
R
O
P
E
R
T
Y
N
A
M
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
P
R
O
P
E
R
T
I
E
S
_
P
R
O
P
E
R
T
Y
N
A
M
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
P
R
O
P
E
R
T
I
E
S
_
P
R
O
P
E
R
T
Y
N
A
M
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
B
A
C
K
E
N
D
 
 
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
m
a
n
a
g
e
r
_
p
r
o
p
e
r
t
i
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
m
a
n
a
g
e
r
_
p
r
o
p
e
r
t
i
e
s
_
t
e
m
p
l
a
t
e
 
=
 
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

 
 
 
 
 
 
 
 

 
 
 
 
 
 
 
 
j
r
_
i
m
p
o
r
t
(
"
w
e
b
h
o
o
k
s
"
)
;

 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
s
 
=
 
n
e
w
 
w
e
b
h
o
o
k
s
(
$
t
h
i
s
J
R
U
s
e
r
-
>
i
d
)
;

 
 
 
 
 
 
 
 
$
a
l
l
_
w
e
b
h
o
o
k
s
 
=
 
$
w
e
b
h
o
o
k
s
-
>
g
e
t
_
a
l
l
_
w
e
b
h
o
o
k
s
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
a
l
l
_
w
e
b
h
o
o
k
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
a
l
l
_
w
e
b
h
o
o
k
s
 
a
s
 
$
w
e
b
h
o
o
k
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
N
T
E
G
R
A
T
I
O
N
_
I
D
'
]
 
 
 
 
=
 
$
w
e
b
h
o
o
k
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
U
R
L
'
]
 
 
=
 
$
w
e
b
h
o
o
k
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
[
'
u
r
l
'
]
;


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
r
[
'
E
N
A
B
L
E
D
'
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
 
'
e
n
a
b
l
e
d
'
,
 
'
o
n
c
h
a
n
g
e
=
"
t
o
g
g
l
e
_
e
n
a
b
l
e
d
(
'
.
$
w
e
b
h
o
o
k
[
'
i
d
'
]
.
'
)
;
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
w
e
b
h
o
o
k
[
'
e
n
a
b
l
e
d
'
]
 
,
 
f
a
l
s
e
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
i
n
t
e
g
r
a
t
i
o
n
&
i
d
=
'
.
$
r
[
'
I
N
T
E
G
R
A
T
I
O
N
_
I
D
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
W
E
B
H
O
O
K
S
_
I
N
T
E
G
R
A
T
I
O
N
_
U
R
L
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
W
E
B
H
O
O
K
S
_
I
N
T
E
G
R
A
T
I
O
N
_
U
R
L
'
,
 
'
W
E
B
H
O
O
K
S
_
I
N
T
E
G
R
A
T
I
O
N
_
U
R
L
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
W
E
B
H
O
O
K
S
_
I
N
T
E
G
R
A
T
I
O
N
_
I
D
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
W
E
B
H
O
O
K
S
_
I
N
T
E
G
R
A
T
I
O
N
_
I
D
'
,
 
'
W
E
B
H
O
O
K
S
_
I
N
T
E
G
R
A
T
I
O
N
_
I
D
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
M
A
N
A
G
E
R
_
P
R
O
P
E
R
T
I
E
S
'
]
 
 
 
 
 
 
=
 
$
m
a
n
a
g
e
r
_
p
r
o
p
e
r
t
i
e
s
_
t
e
m
p
l
a
t
e
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
i
c
o
n
-
e
d
i
t
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
i
n
t
e
g
r
a
t
i
o
n
&
i
d
=
'
 
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
N
E
W
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
N
E
W
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
B
A
C
K
E
N
D
 
 
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
i
n
t
e
g
r
a
t
i
o
n
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
