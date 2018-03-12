
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
p
r
o
p
e
r
t
y
_
p
r
i
c
e
_
f
o
r
_
d
i
s
p
l
a
y
_
i
n
_
l
i
s
t
s
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
u
i
d
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


 
 
 
 
$
m
r
C
o
n
f
i
g
 
=
 
g
e
t
P
r
o
p
e
r
t
y
S
p
e
c
i
f
i
c
S
e
t
t
i
n
g
s
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
u
i
d
)
;


 
 
 
 
s
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
'
,
 
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
)
;


 
 
 
 
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
a
t
h
e
r
_
d
a
t
a
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
u
i
d
)
;


 
 
 
 
$
p
l
u
g
i
n
_
w
i
l
l
_
p
r
o
v
i
d
e
_
l
o
w
e
s
t
_
p
r
i
c
e
 
=
 
f
a
l
s
e
;


 
 
 
 
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
r
i
g
g
e
r
E
v
e
n
t
(
'
0
7
0
1
5
'
,
 
a
r
r
a
y
(
'
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
'
 
=
>
 
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
)
)
;
 
/
/
 
O
p
t
i
o
n
a
l


 
 
 
 
$
m
c
O
u
t
p
u
t
 
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
g
e
t
A
l
l
E
v
e
n
t
P
o
i
n
t
s
D
a
t
a
(
'
0
7
0
1
5
'
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
c
O
u
t
p
u
t
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
c
O
u
t
p
u
t
 
a
s
 
$
k
e
y
 
=
>
 
$
v
a
l
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
v
a
l
 
=
=
 
t
r
u
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
l
u
g
i
n
_
w
i
l
l
_
p
r
o
v
i
d
e
_
l
o
w
e
s
t
_
p
r
i
c
e
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
t
r
o
l
l
i
n
g
_
p
l
u
g
i
n
 
=
 
$
k
e
y
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
$
m
u
l
t
i
p
l
i
e
r
 
=
 
1
;

 
 
 
 
i
f
 
(
!
i
s
s
e
t
(
$
m
r
C
o
n
f
i
g
[
 
'
b
o
o
k
i
n
g
_
f
o
r
m
_
d
a
i
l
y
_
w
e
e
k
l
y
_
m
o
n
t
h
l
y
'
 
]
)
)
 
{
 
/
/
 
T
h
i
s
 
s
h
o
u
l
d
n
'
t
 
b
e
 
n
e
e
d
e
d
,
 
a
s
 
t
h
e
 
s
e
t
t
i
n
g
 
i
s
 
a
u
t
o
m
a
t
i
c
a
l
l
y
 
p
u
l
l
e
d
 
f
r
o
m
 
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
.
p
h
p
,
 
b
u
t
 
t
h
e
r
e
'
s
 
a
l
w
a
y
s
 
o
n
e
 
w
e
i
r
d
 
s
e
r
v
e
r
.
.
.

 
 
 
 
$
m
r
C
o
n
f
i
g
[
 
'
b
o
o
k
i
n
g
_
f
o
r
m
_
d
a
i
l
y
_
w
e
e
k
l
y
_
m
o
n
t
h
l
y
'
 
]
 
=
 
'
D
'
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
m
r
C
o
n
f
i
g
[
 
'
b
o
o
k
i
n
g
_
f
o
r
m
_
d
a
i
l
y
_
w
e
e
k
l
y
_
m
o
n
t
h
l
y
'
 
]
)
 
{

 
 
 
 
 
 
 
 
c
a
s
e
 
'
D
'
:

 
 
 
 
 
 
 
 
 
 
 
 
$
m
u
l
t
i
p
l
i
e
r
 
=
 
1
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
W
'
:

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
t
a
r
i
f
f
C
h
a
r
g
e
s
S
t
o
r
e
d
W
e
e
k
l
y
Y
e
s
N
o
'
 
]
 
!
=
 
'
1
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
m
u
l
t
i
p
l
i
e
r
 
=
 
7
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
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
M
'
:

 
 
 
 
 
 
 
 
 
 
 
 
$
m
u
l
t
i
p
l
i
e
r
 
=
 
3
0
;

 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
}


 
 
 
 
$
p
r
i
c
e
 
=
 
0
.
0
0
;

 
 
 
 
$
o
u
t
p
u
t
_
l
o
w
e
s
t
 
=
 
f
a
l
s
e
;

 
 
 
 
i
f
 
(
$
p
l
u
g
i
n
_
w
i
l
l
_
p
r
o
v
i
d
e
_
l
o
w
e
s
t
_
p
r
i
c
e
)
 
{

 
 
 
 
 
 
 
 
$
o
u
t
p
u
t
_
l
o
w
e
s
t
 
=
 
t
r
u
e
;

 
 
 
 
 
 
 
 
$
p
l
u
g
i
n
_
p
r
i
c
e
 
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
0
7
0
1
6
'
,
 
$
c
o
n
t
r
o
l
l
i
n
g
_
p
l
u
g
i
n
,
 
a
r
r
a
y
(
'
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
'
 
=
>
 
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
)
)
;

 
 
 
 
 
 
 
 
i
f
 
(
!
i
s
_
n
u
l
l
(
$
p
l
u
g
i
n
_
p
r
i
c
e
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
e
_
t
e
x
t
 
=
 
$
p
l
u
g
i
n
_
p
r
i
c
e
[
 
'
P
R
E
_
T
E
X
T
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
i
c
e
 
=
 
$
p
l
u
g
i
n
_
p
r
i
c
e
[
 
'
P
R
I
C
E
'
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
$
p
o
s
t
_
t
e
x
t
 
=
 
$
p
l
u
g
i
n
_
p
r
i
c
e
[
 
'
P
O
S
T
_
T
E
X
T
'
 
]
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
$
p
r
i
c
e
s
F
r
o
m
A
r
r
a
y
 
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
s
e
a
r
c
h
D
a
t
e
 
=
 
d
a
t
e
(
'
Y
/
m
/
d
'
)
;

 
 
 
 
 
 
 
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
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
o
m
r
e
s
_
t
e
m
p
_
b
o
o
k
i
n
g
_
h
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
i
s
s
e
t
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
[
 
'
a
r
r
i
v
a
l
D
a
t
e
'
 
]
)
 
&
&
 
$
_
R
E
Q
U
E
S
T
[
 
'
a
r
r
i
v
a
l
D
a
t
e
'
 
]
 
!
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
a
r
r
i
v
a
l
D
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
a
r
r
i
v
a
l
D
a
t
e
'
,
 
'
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
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
_
R
E
Q
U
E
S
T
[
 
'
p
d
e
t
a
i
l
s
_
c
a
l
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
a
r
r
i
v
a
l
D
a
t
e
 
=
 
J
S
C
a
l
m
a
k
e
I
n
p
u
t
D
a
t
e
s
(
$
a
r
r
i
v
a
l
D
a
t
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
a
r
c
h
D
a
t
e
 
=
 
J
S
C
a
l
C
o
n
v
e
r
t
I
n
p
u
t
D
a
t
e
s
(
$
a
r
r
i
v
a
l
D
a
t
e
)
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
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
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
s
e
a
r
c
h
_
d
a
t
a
[
 
'
j
o
m
s
e
a
r
c
h
_
a
v
a
i
l
a
b
i
l
i
t
y
'
 
]
)
 
&
&
 
t
r
i
m
(
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
s
e
a
r
c
h
_
d
a
t
a
[
 
'
j
o
m
s
e
a
r
c
h
_
a
v
a
i
l
a
b
i
l
i
t
y
'
 
]
)
 
!
=
 
'
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
s
e
a
r
c
h
D
a
t
e
 
=
 
$
t
m
p
B
o
o
k
i
n
g
H
a
n
d
l
e
r
-
>
t
m
p
s
e
a
r
c
h
_
d
a
t
a
[
 
'
j
o
m
s
e
a
r
c
h
_
a
v
a
i
l
a
b
i
l
i
t
y
'
 
]
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
'
S
E
L
E
C
T
 
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
,
 
r
o
o
m
r
a
t
e
p
e
r
d
a
y
 
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
r
a
t
e
s
 
W
H
E
R
E
 
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
 
'
.
(
i
n
t
)
 
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
.
"
 
A
N
D
 
D
A
T
E
_
F
O
R
M
A
T
(
'
"
.
$
s
e
a
r
c
h
D
a
t
e
.
"
'
,
 
'
%
Y
/
%
m
/
%
d
'
)
 
B
E
T
W
E
E
N
 
D
A
T
E
_
F
O
R
M
A
T
(
`
v
a
l
i
d
f
r
o
m
`
,
 
'
%
Y
/
%
m
/
%
d
'
)
 
A
N
D
 
D
A
T
E
_
F
O
R
M
A
T
(
`
v
a
l
i
d
t
o
`
,
 
'
%
Y
/
%
m
/
%
d
'
)
 
A
N
D
 
r
o
o
m
r
a
t
e
p
e
r
d
a
y
 
>
 
'
0
'
 
"
;

 
 
 
 
 
 
 
 
$
t
a
r
i
f
f
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
a
r
i
f
f
L
i
s
t
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
a
r
i
f
f
L
i
s
t
 
a
s
 
$
t
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
!
i
s
s
e
t
(
$
p
r
i
c
e
s
F
r
o
m
A
r
r
a
y
[
 
$
t
-
>
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
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
i
c
e
s
F
r
o
m
A
r
r
a
y
[
 
$
t
-
>
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
 
]
 
=
 
$
t
-
>
r
o
o
m
r
a
t
e
p
e
r
d
a
y
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
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
p
r
i
c
e
s
F
r
o
m
A
r
r
a
y
[
 
$
t
-
>
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
 
]
)
 
&
&
 
$
p
r
i
c
e
s
F
r
o
m
A
r
r
a
y
[
 
$
t
-
>
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
 
]
 
>
 
$
t
-
>
r
o
o
m
r
a
t
e
p
e
r
d
a
y
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
i
c
e
s
F
r
o
m
A
r
r
a
y
[
 
$
t
-
>
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
 
]
 
=
 
$
t
-
>
r
o
o
m
r
a
t
e
p
e
r
d
a
y
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
i
s
_
r
e
a
l
_
e
s
t
a
t
e
_
l
i
s
t
i
n
g
'
 
]
 
=
=
 
0
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
p
r
i
c
e
s
F
r
o
m
A
r
r
a
y
[
 
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
 
]
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
p
r
i
c
e
s
_
i
n
c
l
u
s
i
v
e
'
 
]
 
=
=
 
'
0
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
i
c
e
 
=
 
o
u
t
p
u
t
_
p
r
i
c
e
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
g
r
o
s
s
_
a
c
c
o
m
m
o
d
a
t
i
o
n
_
p
r
i
c
e
(
$
p
r
i
c
e
s
F
r
o
m
A
r
r
a
y
[
 
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
 
]
,
 
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
)
 
*
 
$
m
u
l
t
i
p
l
i
e
r
,
 
'
'
,
 
t
r
u
e
,
 
t
r
u
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
i
c
e
 
=
 
o
u
t
p
u
t
_
p
r
i
c
e
(
$
p
r
i
c
e
s
F
r
o
m
A
r
r
a
y
[
 
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
 
]
 
*
 
$
m
u
l
t
i
p
l
i
e
r
,
 
'
'
,
 
t
r
u
e
,
 
t
r
u
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
t
a
r
i
f
f
C
h
a
r
g
e
s
S
t
o
r
e
d
W
e
e
k
l
y
Y
e
s
N
o
'
 
]
 
=
=
 
'
1
'
 
&
&
 
$
m
r
C
o
n
f
i
g
[
 
'
t
a
r
i
f
f
m
o
d
e
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
p
o
s
t
_
t
e
x
t
 
=
 
'
&
n
b
s
p
;
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
L
I
S
T
T
A
R
I
F
F
_
R
O
O
M
R
A
T
E
P
E
R
W
E
E
K
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
L
I
S
T
T
A
R
I
F
F
_
R
O
O
M
R
A
T
E
P
E
R
W
E
E
K
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
w
h
o
l
e
d
a
y
_
b
o
o
k
i
n
g
'
 
]
 
=
=
 
'
1
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
p
e
r
P
e
r
s
o
n
P
e
r
N
i
g
h
t
'
 
]
 
=
=
 
'
0
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
o
s
t
_
t
e
x
t
 
=
 
'
&
n
b
s
p
;
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
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
P
N
_
D
A
Y
_
W
H
O
L
E
D
A
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
F
R
O
N
T
_
T
A
R
I
F
F
S
_
P
N
_
D
A
Y
_
W
H
O
L
E
D
A
Y
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
o
s
t
_
t
e
x
t
 
=
 
'
&
n
b
s
p
;
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
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
P
P
P
N
_
D
A
Y
_
W
H
O
L
E
D
A
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
F
R
O
N
T
_
T
A
R
I
F
F
S
_
P
P
P
N
_
D
A
Y
_
W
H
O
L
E
D
A
Y
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
s
w
i
t
c
h
 
(
$
m
r
C
o
n
f
i
g
[
 
'
b
o
o
k
i
n
g
_
f
o
r
m
_
d
a
i
l
y
_
w
e
e
k
l
y
_
m
o
n
t
h
l
y
'
 
]
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
c
a
s
e
 
'
D
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
w
h
o
l
e
d
a
y
_
b
o
o
k
i
n
g
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
p
o
s
t
_
t
e
x
t
 
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
F
R
O
N
T
_
T
A
R
I
F
F
S
_
P
N
_
D
A
Y
_
W
H
O
L
E
D
A
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
F
R
O
N
T
_
T
A
R
I
F
F
S
_
P
N
_
D
A
Y
_
W
H
O
L
E
D
A
Y
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
m
r
C
o
n
f
i
g
[
 
'
p
e
r
P
e
r
s
o
n
P
e
r
N
i
g
h
t
'
 
]
 
=
=
 
'
0
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
o
s
t
_
t
e
x
t
 
=
 
'
&
n
b
s
p
;
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
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
P
N
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
F
R
O
N
T
_
T
A
R
I
F
F
S
_
P
N
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
o
s
t
_
t
e
x
t
 
=
 
'
&
n
b
s
p
;
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
_
J
O
M
R
E
S
_
F
R
O
N
T
_
T
A
R
I
F
F
S
_
P
P
P
N
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
F
R
O
N
T
_
T
A
R
I
F
F
S
_
P
P
P
N
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
W
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
o
s
t
_
t
e
x
t
 
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
B
O
O
K
I
N
G
F
O
R
M
_
P
R
I
C
I
N
G
O
U
T
P
U
T
_
W
E
E
K
L
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
B
O
O
K
I
N
G
F
O
R
M
_
P
R
I
C
I
N
G
O
U
T
P
U
T
_
W
E
E
K
L
Y
'
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
M
'
:

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
o
s
t
_
t
e
x
t
 
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
B
O
O
K
I
N
G
F
O
R
M
_
P
R
I
C
I
N
G
O
U
T
P
U
T
_
M
O
N
T
H
L
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
B
O
O
K
I
N
G
F
O
R
M
_
P
R
I
C
I
N
G
O
U
T
P
U
T
_
M
O
N
T
H
L
Y
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
b
r
e
a
k
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
e
_
t
e
x
t
 
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
R
I
F
F
S
F
R
O
M
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
R
I
F
F
S
F
R
O
M
'
,
 
f
a
l
s
e
,
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
e
_
t
e
x
t
 
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
E
X
T
R
A
_
P
R
I
C
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
C
O
M
_
M
R
_
E
X
T
R
A
_
P
R
I
C
E
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
i
c
e
 
=
 
o
u
t
p
u
t
_
p
r
i
c
e
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
r
e
a
l
_
e
s
t
a
t
e
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
p
r
i
c
e
,
 
'
'
,
 
t
r
u
e
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
o
s
t
_
t
e
x
t
 
=
 
'
'
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
e
_
t
e
x
t
 
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
E
X
T
R
A
_
P
R
I
C
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
C
O
M
_
M
R
_
E
X
T
R
A
_
P
R
I
C
E
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
 
f
a
l
s
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
p
r
i
c
e
 
=
 
o
u
t
p
u
t
_
p
r
i
c
e
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
r
e
a
l
_
e
s
t
a
t
e
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
p
r
i
c
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
p
o
s
t
_
t
e
x
t
 
=
 
'
'
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
a
r
r
a
y
(
'
P
R
E
_
T
E
X
T
'
 
=
>
 
$
p
r
e
_
t
e
x
t
,
 
'
P
R
I
C
E
'
 
=
>
 
$
p
r
i
c
e
,
 
'
P
O
S
T
_
T
E
X
T
'
 
=
>
 
$
p
o
s
t
_
t
e
x
t
)
;

}

