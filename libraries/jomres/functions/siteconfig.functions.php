
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


/
/
=
=
=
=
=
=
=
=
=
=
=
=
=
=
=
=
=
=
=
=
=
=
=
=
=
=
=
=
=
=
=

/
/
 
S
i
t
e
 
C
o
n
f
i
g
 
F
u
n
c
t
i
o
n
s

/
/
=
=
=
=
=
=
=
=
=
=
=
=
=
=
=
=
=
=
=
=
=
=
=
=
=
=
=
=
=
=
=


/
*
*

 
*
 
C
o
m
p
i
l
e
s
 
d
a
t
a
 
i
n
 
p
r
e
p
a
r
a
t
i
o
n
 
f
o
r
 
s
h
o
w
i
n
g
 
t
h
e
 
s
i
t
e
 
c
o
n
f
i
g
u
r
a
t
i
o
n
 
p
a
n
e
l
.

 
*
/

f
u
n
c
t
i
o
n
 
s
h
o
w
S
i
t
e
C
o
n
f
i
g
(
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
i
m
a
g
e
 
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
m
a
k
e
I
m
a
g
e
V
a
l
i
d
(
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
S
a
v
e
.
p
n
g
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
c
u
s
t
o
m
T
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
S
i
t
e
C
o
n
f
i
g
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
S
A
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
C
O
M
_
M
R
_
S
A
V
E
'
,
 
f
a
l
s
e
)
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
 
t
r
u
e
,
 
$
s
u
b
m
i
t
T
a
s
k
 
=
 
'
s
a
v
e
_
s
i
t
e
_
s
e
t
t
i
n
g
s
'
,
 
$
i
m
a
g
e
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
j
r
C
o
n
f
i
g
[
 
'
l
o
a
d
_
j
q
u
e
r
y
_
u
i
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
$
j
r
C
o
n
f
i
g
[
 
'
l
o
a
d
_
j
q
u
e
r
y
_
u
i
'
 
]
 
=
 
'
1
'
;

 
 
 
 
}


 
 
 
 
$
l
i
s
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

 
 
 
 
/
/
 
m
a
k
e
 
a
 
s
t
a
n
d
a
r
d
 
y
e
s
/
n
o
 
l
i
s
t

 
 
 
 
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
e
d
i
t
o
r
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
e
d
i
t
o
r
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
e
d
i
t
o
r
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
s
o
r
t
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
 
/
/
 
T
h
e
 
s
e
a
r
c
h
 
o
r
d
e
r
 
d
r
o
p
d
o
w
n
 
l
i
s
t
,
 
t
h
i
s
 
c
o
n
f
i
g
u
r
e
'
s
 
t
h
e
 
d
e
f
a
u
l
t
.

 
 
 
 
$
s
o
r
t
A
r
r
a
y
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
S
O
R
T
O
R
D
E
R
_
D
E
F
A
U
L
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
S
O
R
T
O
R
D
E
R
_
D
E
F
A
U
L
T
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
)
;

 
 
 
 
$
s
o
r
t
A
r
r
a
y
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
2
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
S
O
R
T
O
R
D
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
O
M
R
E
S
_
S
O
R
T
O
R
D
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
s
o
r
t
A
r
r
a
y
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
3
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
S
O
R
T
O
R
D
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
Y
R
E
G
I
O
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
S
O
R
T
O
R
D
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
Y
R
E
G
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
s
o
r
t
A
r
r
a
y
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
4
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
S
O
R
T
O
R
D
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
Y
T
O
W
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
S
O
R
T
O
R
D
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
Y
T
O
W
N
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
)
;

 
 
 
 
$
s
o
r
t
A
r
r
a
y
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
5
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
S
O
R
T
O
R
D
E
R
_
S
T
A
R
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
S
O
R
T
O
R
D
E
R
_
S
T
A
R
S
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
)
;

 
 
 
 
$
s
o
r
t
A
r
r
a
y
D
r
o
p
d
o
w
n
 
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
s
o
r
t
A
r
r
a
y
,
 
'
c
f
g
_
s
e
a
r
c
h
_
o
r
d
e
r
_
d
e
f
a
u
l
t
'
,
 
'
i
d
=
"
s
o
r
t
b
y
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
j
r
C
o
n
f
i
g
[
 
'
s
e
a
r
c
h
_
o
r
d
e
r
_
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
j
s
I
n
p
u
t
D
a
t
e
F
o
r
m
a
t
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
'
%
d
/
%
m
/
%
Y
'
,
 
'
0
1
/
0
2
/
2
0
0
6
 
-
 
1
s
t
 
F
e
b
r
u
a
r
y
 
2
0
0
6
'
)
;

 
 
 
 
$
j
s
I
n
p
u
t
D
a
t
e
F
o
r
m
a
t
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
,
 
'
2
0
0
6
/
0
2
/
0
1
'
)
;

 
 
 
 
$
j
s
I
n
p
u
t
D
a
t
e
F
o
r
m
a
t
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
'
%
m
/
%
d
/
%
Y
'
,
 
'
0
2
/
0
1
/
2
0
0
6
'
)
;

 
 
 
 
$
j
s
I
n
p
u
t
D
a
t
e
F
o
r
m
a
t
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
'
%
d
-
%
m
-
%
Y
'
,
 
'
0
1
-
0
2
-
2
0
0
6
'
)
;

 
 
 
 
$
j
s
I
n
p
u
t
D
a
t
e
F
o
r
m
a
t
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
'
%
Y
-
%
m
-
%
d
'
,
 
'
2
0
0
6
-
0
2
-
0
1
'
)
;

 
 
 
 
$
j
s
I
n
p
u
t
D
a
t
e
F
o
r
m
a
t
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
'
%
m
-
%
d
-
%
Y
'
,
 
'
0
2
-
0
1
-
2
0
0
6
'
)
;

 
 
 
 
$
j
s
I
n
p
u
t
F
o
r
m
a
t
D
r
o
p
d
o
w
n
L
i
s
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
j
s
I
n
p
u
t
D
a
t
e
F
o
r
m
a
t
s
,
 
'
c
f
g
_
c
a
l
_
i
n
p
u
t
'
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
j
r
C
o
n
f
i
g
[
 
'
c
a
l
_
i
n
p
u
t
'
 
]
)
;


 
 
 
 
$
j
q
u
e
r
y
U
I
t
h
e
m
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

 
 
 
 
$
c
s
s
F
i
l
e
s
 
=
 
s
e
a
r
c
h
C
S
S
T
h
e
m
e
s
D
i
r
F
o
r
C
S
S
F
i
l
e
s
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
c
s
s
F
i
l
e
s
 
a
s
 
$
f
i
l
e
)
 
{

 
 
 
 
 
 
 
 
$
j
q
u
e
r
y
U
I
t
h
e
m
e
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
f
i
l
e
[
 
'
s
u
b
d
i
r
'
 
]
,
 
$
f
i
l
e
[
 
'
s
u
b
d
i
r
'
 
]
)
;

 
 
 
 
}

	

	
i
f
 
(
$
j
r
C
o
n
f
i
g
[
 
'
j
q
u
e
r
y
_
u
i
_
t
h
e
m
e
'
 
]
 
=
=
 
'
j
o
m
r
e
s
'
)
 
{

	
	
$
j
r
C
o
n
f
i
g
[
 
'
j
q
u
e
r
y
_
u
i
_
t
h
e
m
e
'
 
]
 
=
 
'
b
a
s
e
'
;

	
}


 
 
 
 
$
j
q
u
e
r
y
U
I
t
h
e
m
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
L
i
s
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
j
q
u
e
r
y
U
I
t
h
e
m
e
s
,
 
'
c
f
g
_
j
q
u
e
r
y
_
u
i
_
t
h
e
m
e
'
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
j
r
C
o
n
f
i
g
[
 
'
j
q
u
e
r
y
_
u
i
_
t
h
e
m
e
'
 
]
)
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
j
r
C
o
n
f
i
g
[
 
'
c
s
s
C
o
l
o
u
r
S
c
h
e
m
e
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
$
j
r
C
o
n
f
i
g
[
 
'
c
s
s
C
o
l
o
u
r
S
c
h
e
m
e
'
 
]
 
=
 
'
b
l
u
e
'
;

 
 
 
 
}


 
 
 
 
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
c
o
m
m
i
s
s
i
o
n
s
'
)
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
c
o
m
m
i
s
s
i
o
n
s
 
=
 
n
e
w
 
j
r
p
o
r
t
a
l
_
c
o
m
m
i
s
s
i
o
n
s
(
)
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
c
o
m
m
i
s
s
i
o
n
s
-
>
g
e
t
A
l
l
C
r
a
t
e
s
(
)
;


 
 
 
 
$
c
r
a
t
e
O
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
j
r
p
o
r
t
a
l
_
c
o
m
m
i
s
s
i
o
n
s
-
>
c
r
a
t
e
s
 
a
s
 
$
c
)
 
{

 
 
 
 
 
 
 
 
$
c
r
a
t
e
O
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
c
[
 
'
i
d
'
 
]
,
 
$
c
[
 
'
t
i
t
l
e
'
 
]
)
;

 
 
 
 
}

 
 
 
 
$
l
i
s
t
s
[
 
'
d
e
f
a
u
l
t
C
r
a
t
e
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
c
r
a
t
e
O
p
t
i
o
n
s
,
 
'
c
f
g
_
d
e
f
a
u
l
t
C
r
a
t
e
'
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
j
r
C
o
n
f
i
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
C
r
a
t
e
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
e
r
r
o
r
C
h
e
c
k
i
n
g
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
c
f
g
_
e
r
r
o
r
C
h
e
c
k
i
n
g
'
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
j
r
C
o
n
f
i
g
[
 
'
e
r
r
o
r
C
h
e
c
k
i
n
g
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
u
s
e
G
l
o
b
a
l
C
u
r
r
e
n
c
y
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
c
f
g
_
u
s
e
G
l
o
b
a
l
C
u
r
r
e
n
c
y
'
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
j
r
C
o
n
f
i
g
[
 
'
u
s
e
G
l
o
b
a
l
C
u
r
r
e
n
c
y
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
e
d
i
t
i
n
g
M
o
d
e
A
f
f
e
c
t
s
A
l
l
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
c
f
g
_
e
d
i
t
i
n
g
M
o
d
e
A
f
f
e
c
t
s
A
l
l
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
'
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
j
r
C
o
n
f
i
g
[
 
'
e
d
i
t
i
n
g
M
o
d
e
A
f
f
e
c
t
s
A
l
l
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
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
u
s
e
G
l
o
b
a
l
P
F
e
a
t
u
r
e
s
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
c
f
g
_
u
s
e
G
l
o
b
a
l
P
F
e
a
t
u
r
e
s
'
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
j
r
C
o
n
f
i
g
[
 
'
u
s
e
G
l
o
b
a
l
P
F
e
a
t
u
r
e
s
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
u
s
e
G
l
o
b
a
l
R
o
o
m
T
y
p
e
s
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
c
f
g
_
u
s
e
G
l
o
b
a
l
R
o
o
m
T
y
p
e
s
'
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
j
r
C
o
n
f
i
g
[
 
'
u
s
e
G
l
o
b
a
l
R
o
o
m
T
y
p
e
s
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
s
e
l
f
R
e
g
i
s
t
r
a
t
i
o
n
A
l
l
o
w
e
d
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
c
f
g
_
s
e
l
f
R
e
g
i
s
t
r
a
t
i
o
n
A
l
l
o
w
e
d
'
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
j
r
C
o
n
f
i
g
[
 
'
s
e
l
f
R
e
g
i
s
t
r
a
t
i
o
n
A
l
l
o
w
e
d
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
a
l
l
o
w
H
T
M
L
e
d
i
t
o
r
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
e
d
i
t
o
r
y
e
s
n
o
,
 
'
c
f
g
_
a
l
l
o
w
H
T
M
L
e
d
i
t
o
r
'
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
j
r
C
o
n
f
i
g
[
 
'
a
l
l
o
w
H
T
M
L
e
d
i
t
o
r
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
d
u
m
p
T
e
m
p
l
a
t
e
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
c
f
g
_
d
u
m
p
T
e
m
p
l
a
t
e
'
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
j
r
C
o
n
f
i
g
[
 
'
d
u
m
p
T
e
m
p
l
a
t
e
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
e
m
a
i
l
E
r
r
o
r
s
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
c
f
g
_
e
m
a
i
l
E
r
r
o
r
s
'
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
j
r
C
o
n
f
i
g
[
 
'
e
m
a
i
l
E
r
r
o
r
s
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
c
o
m
p
o
s
i
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
d
e
t
a
i
l
s
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
c
f
g
_
c
o
m
p
o
s
i
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
d
e
t
a
i
l
s
'
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
j
r
C
o
n
f
i
g
[
 
'
c
o
m
p
o
s
i
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
d
e
t
a
i
l
s
'
 
]
)
;


 
 
 
 
$
l
i
s
t
s
[
 
'
s
h
o
w
_
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
i
n
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
c
f
g
_
s
h
o
w
_
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
i
n
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
j
r
C
o
n
f
i
g
[
 
'
s
h
o
w
_
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
i
n
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
 
]
)
;


 
 
 
 
$
g
e
o
s
e
a
r
c
h
L
i
s
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
g
e
o
s
e
a
r
c
h
L
i
s
t
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
'
,
 
'
'
)
;

 
 
 
 
$
g
e
o
s
e
a
r
c
h
L
i
s
t
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
t
o
w
n
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
V
R
C
T
_
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
T
O
W
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
C
O
M
_
M
R
_
V
R
C
T
_
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
T
O
W
N
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
g
e
o
s
e
a
r
c
h
L
i
s
t
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
r
e
g
i
o
n
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
V
R
C
T
_
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
R
E
G
I
O
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
C
O
M
_
M
R
_
V
R
C
T
_
P
R
O
P
E
R
T
Y
_
H
E
A
D
E
R
_
R
E
G
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
)
;

 
 
 
 
$
g
e
o
s
e
a
r
c
h
D
r
o
p
d
o
w
n
L
i
s
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
g
e
o
s
e
a
r
c
h
L
i
s
t
,
 
'
c
f
g
_
i
n
t
e
g
r
a
t
e
d
S
e
a
r
c
h
_
g
e
o
s
e
a
r
c
h
t
y
p
e
'
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
j
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
n
t
e
g
r
a
t
e
d
S
e
a
r
c
h
_
g
e
o
s
e
a
r
c
h
t
y
p
e
'
 
]
)
;


 
 
 
 
$
c
a
l
e
n
d
a
r
S
t
a
r
t
D
a
y
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
c
a
l
e
n
d
a
r
S
t
a
r
t
D
a
y
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
W
E
E
K
D
A
Y
S
_
S
U
N
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
C
O
M
_
M
R
_
W
E
E
K
D
A
Y
S
_
S
U
N
D
A
Y
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
c
a
l
e
n
d
a
r
S
t
a
r
t
D
a
y
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
'
2
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
W
E
E
K
D
A
Y
S
_
M
O
N
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
C
O
M
_
M
R
_
W
E
E
K
D
A
Y
S
_
M
O
N
D
A
Y
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
c
a
l
e
n
d
a
r
S
t
a
r
t
D
a
y
s
D
r
o
p
d
o
w
n
L
i
s
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
c
a
l
e
n
d
a
r
S
t
a
r
t
D
a
y
s
,
 
'
c
f
g
_
c
a
l
e
n
d
a
r
s
t
a
r
t
o
f
w
e
e
k
d
a
y
'
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
j
r
C
o
n
f
i
g
[
 
'
c
a
l
e
n
d
a
r
s
t
a
r
t
o
f
w
e
e
k
d
a
y
'
 
]
)
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
j
r
C
o
n
f
i
g
[
 
'
g
u
e
s
t
n
u
m
b
e
r
s
e
a
r
c
h
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
$
j
r
C
o
n
f
i
g
[
 
'
g
u
e
s
t
n
u
m
b
e
r
s
e
a
r
c
h
'
 
]
 
=
 
'
e
q
u
a
l
'
;

 
 
 
 
}


 
 
 
 
$
g
u
e
s
t
n
u
m
b
e
r
s
e
a
r
c
h
L
i
s
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
g
u
e
s
t
n
u
m
b
e
r
s
e
a
r
c
h
L
i
s
t
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
l
e
s
s
t
h
a
n
'
,
 
'
<
=
'
)
;

 
 
 
 
$
g
u
e
s
t
n
u
m
b
e
r
s
e
a
r
c
h
L
i
s
t
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
e
q
u
a
l
'
,
 
'
=
'
)
;

 
 
 
 
$
g
u
e
s
t
n
u
m
b
e
r
s
e
a
r
c
h
L
i
s
t
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
g
r
e
a
t
e
r
t
h
a
n
'
,
 
'
>
=
'
)
;

 
 
 
 
$
g
u
e
s
t
n
u
m
b
e
r
s
e
a
r
c
h
D
r
o
p
d
o
w
n
L
i
s
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
g
u
e
s
t
n
u
m
b
e
r
s
e
a
r
c
h
L
i
s
t
,
 
'
c
f
g
_
g
u
e
s
t
n
u
m
b
e
r
s
e
a
r
c
h
'
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
j
r
C
o
n
f
i
g
[
 
'
g
u
e
s
t
n
u
m
b
e
r
s
e
a
r
c
h
'
 
]
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
$
j
r
C
o
n
f
i
g
[
 
'
g
l
o
b
a
l
C
u
r
r
e
n
c
y
C
o
d
e
'
 
]
,
 
t
r
u
e
)
;


 
 
 
 
$
j
o
m
r
e
s
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
t
y
p
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
j
o
m
r
e
s
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
t
y
p
e
s
'
)
;

 
 
 
 
$
l
a
n
g
u
a
g
e
_
c
o
n
t
e
x
t
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
j
o
m
r
e
s
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
t
y
p
e
s
-
>
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
T
y
p
e
D
e
s
c
D
r
o
p
d
o
w
n
(
$
j
r
C
o
n
f
i
g
[
 
'
l
a
n
g
u
a
g
e
_
c
o
n
t
e
x
t
'
 
]
,
 
'
c
f
g
_
l
a
n
g
u
a
g
e
_
c
o
n
t
e
x
t
'
)
;


 
 
 
 
$
f
i
l
t
e
r
i
n
g
_
l
e
v
e
l
 
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
f
i
l
t
e
r
i
n
g
_
l
e
v
e
l
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
w
e
a
k
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
I
N
P
U
T
F
I
L
T
E
R
I
N
G
_
L
E
V
E
L
_
W
E
A
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
I
N
P
U
T
F
I
L
T
E
R
I
N
G
_
L
E
V
E
L
_
W
E
A
K
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
f
i
l
t
e
r
i
n
g
_
l
e
v
e
l
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
s
t
r
o
n
g
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
I
N
P
U
T
F
I
L
T
E
R
I
N
G
_
L
E
V
E
L
_
S
T
R
O
N
G
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
N
P
U
T
F
I
L
T
E
R
I
N
G
_
L
E
V
E
L
_
S
T
R
O
N
G
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
f
i
l
t
e
r
i
n
g
_
l
e
v
e
l
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
f
i
l
t
e
r
i
n
g
_
l
e
v
e
l
,
 
'
c
f
g
_
i
n
p
u
t
_
f
i
l
t
e
r
i
n
g
'
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
j
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
n
p
u
t
_
f
i
l
t
e
r
i
n
g
'
 
]
)
;


 
 
 
 
$
p
r
o
d
u
c
t
i
o
n
_
d
e
v
e
l
o
p
m
e
n
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
r
o
d
u
c
t
i
o
n
_
d
e
v
e
l
o
p
m
e
n
t
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
p
r
o
d
u
c
t
i
o
n
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
N
F
I
G
_
P
R
O
D
U
C
T
I
O
N
_
D
E
V
E
L
O
P
M
E
N
T
_
S
E
T
T
I
N
G
_
P
R
O
D
U
C
T
I
O
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
C
O
N
F
I
G
_
P
R
O
D
U
C
T
I
O
N
_
D
E
V
E
L
O
P
M
E
N
T
_
S
E
T
T
I
N
G
_
P
R
O
D
U
C
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
)
;

 
 
 
 
$
p
r
o
d
u
c
t
i
o
n
_
d
e
v
e
l
o
p
m
e
n
t
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
d
e
v
e
l
o
p
m
e
n
t
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
N
F
I
G
_
P
R
O
D
U
C
T
I
O
N
_
D
E
V
E
L
O
P
M
E
N
T
_
S
E
T
T
I
N
G
_
D
E
V
E
L
O
P
M
E
N
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
C
O
N
F
I
G
_
P
R
O
D
U
C
T
I
O
N
_
D
E
V
E
L
O
P
M
E
N
T
_
S
E
T
T
I
N
G
_
D
E
V
E
L
O
P
M
E
N
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
p
r
o
d
u
c
t
i
o
n
_
d
e
v
e
l
o
p
m
e
n
t
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
p
r
o
d
u
c
t
i
o
n
_
d
e
v
e
l
o
p
m
e
n
t
,
 
'
c
f
g
_
d
e
v
e
l
o
p
m
e
n
t
_
p
r
o
d
u
c
t
i
o
n
'
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
j
r
C
o
n
f
i
g
[
 
'
d
e
v
e
l
o
p
m
e
n
t
_
p
r
o
d
u
c
t
i
o
n
'
 
]
)
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
j
r
C
o
n
f
i
g
[
 
'
n
a
v
b
a
r
_
l
o
c
a
t
i
o
n
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
$
j
r
C
o
n
f
i
g
[
 
'
n
a
v
b
a
r
_
l
o
c
a
t
i
o
n
'
 
]
 
=
 
'
c
o
m
p
o
n
e
n
t
_
a
r
e
a
'
;

 
 
 
 
}

 
 
 
 
$
n
a
v
b
a
r
_
l
o
c
a
t
i
o
n
 
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
n
a
v
b
a
r
_
l
o
c
a
t
i
o
n
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
c
o
m
p
o
n
e
n
t
_
a
r
e
a
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
B
O
O
T
S
T
R
A
P
_
L
O
C
A
T
I
O
N
_
D
E
F
A
U
L
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
B
O
O
T
S
T
R
A
P
_
L
O
C
A
T
I
O
N
_
D
E
F
A
U
L
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
n
a
v
b
a
r
_
l
o
c
a
t
i
o
n
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
n
a
v
b
a
r
-
f
i
x
e
d
-
t
o
p
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
B
O
O
T
S
T
R
A
P
_
L
O
C
A
T
I
O
N
_
T
O
P
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
T
S
T
R
A
P
_
L
O
C
A
T
I
O
N
_
T
O
P
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
n
a
v
b
a
r
_
l
o
c
a
t
i
o
n
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
n
a
v
b
a
r
-
f
i
x
e
d
-
b
o
t
t
o
m
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
B
O
O
T
S
T
R
A
P
_
L
O
C
A
T
I
O
N
_
B
O
T
T
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
B
O
O
T
S
T
R
A
P
_
L
O
C
A
T
I
O
N
_
B
O
T
T
O
M
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
n
a
v
b
a
r
_
l
o
c
a
t
i
o
n
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
n
a
v
b
a
r
_
l
o
c
a
t
i
o
n
,
 
'
c
f
g
_
n
a
v
b
a
r
_
l
o
c
a
t
i
o
n
'
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
j
r
C
o
n
f
i
g
[
 
'
n
a
v
b
a
r
_
l
o
c
a
t
i
o
n
'
 
]
)
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
j
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
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
$
j
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
'
 
]
 
=
 
'
'
;

 
 
 
 
}


 
 
 
 
$
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
_
o
p
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
_
o
p
t
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
'
,
 
'
B
o
o
t
s
t
r
a
p
 
2
'
)
;

 
 
 
 
$
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
_
o
p
t
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
3
'
,
 
'
B
o
o
t
s
t
r
a
p
 
3
'
)
;

	
$
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
_
o
p
t
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
4
'
,
 
'
B
o
o
t
s
t
r
a
p
 
4
'
)
;

 
 
 
 
$
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
_
o
p
t
,
 
'
c
f
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
_
v
e
r
s
i
o
n
'
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
j
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
1
0
0
4
'
,
 
a
r
r
a
y
(
)
)
;
 
/
/
 
o
p
t
i
o
n
a
l

 
 
 
 
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
l
i
s
t
_
l
a
y
o
u
t
s
 
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
p
r
o
p
e
r
t
y
_
l
i
s
t
_
l
a
y
o
u
t
s
'
)
;


 
 
 
 
$
l
a
y
o
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
l
i
s
t
_
l
a
y
o
u
t
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
v
a
l
)
 
{

 
 
 
 
 
 
 
 
$
l
a
y
o
u
t
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
k
e
y
,
 
$
v
a
l
[
 
'
t
i
t
l
e
'
 
]
)
;

 
 
 
 
}

 
 
 
 
$
l
a
y
o
u
t
s
 
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
l
a
y
o
u
t
,
 
'
c
f
g
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
l
i
s
t
_
l
a
y
o
u
t
_
d
e
f
a
u
l
t
'
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
j
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
o
p
e
r
t
y
_
l
i
s
t
_
l
a
y
o
u
t
_
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
l
i
s
t
s
[
 
'
i
n
t
e
g
r
a
t
e
d
S
e
a
r
c
h
_
e
n
a
b
l
e
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
c
f
g
_
i
n
t
e
g
r
a
t
e
d
S
e
a
r
c
h
_
e
n
a
b
l
e
'
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
j
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
n
t
e
g
r
a
t
e
d
S
e
a
r
c
h
_
e
n
a
b
l
e
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
i
n
t
e
g
r
a
t
e
d
S
e
a
r
c
h
_
u
s
e
C
o
l
s
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
c
f
g
_
i
n
t
e
g
r
a
t
e
d
S
e
a
r
c
h
_
u
s
e
C
o
l
s
'
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
j
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
n
t
e
g
r
a
t
e
d
S
e
a
r
c
h
_
u
s
e
C
o
l
s
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
i
n
t
e
g
r
a
t
e
d
S
e
a
r
c
h
_
s
e
l
e
c
t
c
o
m
b
o
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
c
f
g
_
i
n
t
e
g
r
a
t
e
d
S
e
a
r
c
h
_
s
e
l
e
c
t
c
o
m
b
o
'
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
j
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
n
t
e
g
r
a
t
e
d
S
e
a
r
c
h
_
s
e
l
e
c
t
c
o
m
b
o
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
i
n
t
e
g
r
a
t
e
d
S
e
a
r
c
h
_
p
r
o
p
e
r
t
y
n
a
m
e
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
c
f
g
_
i
n
t
e
g
r
a
t
e
d
S
e
a
r
c
h
_
p
r
o
p
e
r
t
y
n
a
m
e
'
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
j
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
n
t
e
g
r
a
t
e
d
S
e
a
r
c
h
_
p
r
o
p
e
r
t
y
n
a
m
e
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
i
n
t
e
g
r
a
t
e
d
S
e
a
r
c
h
_
p
r
o
p
e
r
t
y
n
a
m
e
_
d
r
o
p
d
o
w
n
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
c
f
g
_
i
n
t
e
g
r
a
t
e
d
S
e
a
r
c
h
_
p
r
o
p
e
r
t
y
n
a
m
e
_
d
r
o
p
d
o
w
n
'
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
j
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
n
t
e
g
r
a
t
e
d
S
e
a
r
c
h
_
p
r
o
p
e
r
t
y
n
a
m
e
_
d
r
o
p
d
o
w
n
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
i
n
t
e
g
r
a
t
e
d
S
e
a
r
c
h
_
p
t
y
p
e
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
c
f
g
_
i
n
t
e
g
r
a
t
e
d
S
e
a
r
c
h
_
p
t
y
p
e
'
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
j
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
n
t
e
g
r
a
t
e
d
S
e
a
r
c
h
_
p
t
y
p
e
'
 
]
)
;

	
$
l
i
s
t
s
[
 
'
i
n
t
e
g
r
a
t
e
d
S
e
a
r
c
h
_
c
a
t
e
g
o
r
y
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
c
f
g
_
i
n
t
e
g
r
a
t
e
d
S
e
a
r
c
h
_
c
a
t
e
g
o
r
y
'
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
j
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
n
t
e
g
r
a
t
e
d
S
e
a
r
c
h
_
c
a
t
e
g
o
r
y
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
i
n
t
e
g
r
a
t
e
d
S
e
a
r
c
h
_
p
t
y
p
e
_
d
r
o
p
d
o
w
n
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
c
f
g
_
i
n
t
e
g
r
a
t
e
d
S
e
a
r
c
h
_
p
t
y
p
e
_
d
r
o
p
d
o
w
n
'
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
j
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
n
t
e
g
r
a
t
e
d
S
e
a
r
c
h
_
p
t
y
p
e
_
d
r
o
p
d
o
w
n
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
i
n
t
e
g
r
a
t
e
d
S
e
a
r
c
h
_
g
e
o
s
e
a
r
c
h
t
y
p
e
_
d
r
o
p
d
o
w
n
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
c
f
g
_
i
n
t
e
g
r
a
t
e
d
S
e
a
r
c
h
_
g
e
o
s
e
a
r
c
h
t
y
p
e
_
d
r
o
p
d
o
w
n
'
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
j
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
n
t
e
g
r
a
t
e
d
S
e
a
r
c
h
_
g
e
o
s
e
a
r
c
h
t
y
p
e
_
d
r
o
p
d
o
w
n
'
 
]
)
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
j
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
n
t
e
g
r
a
t
e
d
S
e
a
r
c
h
_
t
o
w
n
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
$
j
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
n
t
e
g
r
a
t
e
d
S
e
a
r
c
h
_
t
o
w
n
'
 
]
 
=
 
'
'
;

 
 
 
 
}

 
 
 
 
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
j
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
n
t
e
g
r
a
t
e
d
S
e
a
r
c
h
_
t
o
w
n
_
d
r
o
p
d
o
w
n
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
$
j
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
n
t
e
g
r
a
t
e
d
S
e
a
r
c
h
_
t
o
w
n
_
d
r
o
p
d
o
w
n
'
 
]
 
=
 
'
'
;

 
 
 
 
}


 
 
 
 
$
l
i
s
t
s
[
 
'
i
n
t
e
g
r
a
t
e
d
S
e
a
r
c
h
_
t
o
w
n
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
c
f
g
_
i
n
t
e
g
r
a
t
e
d
S
e
a
r
c
h
_
t
o
w
n
'
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
j
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
n
t
e
g
r
a
t
e
d
S
e
a
r
c
h
_
t
o
w
n
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
i
n
t
e
g
r
a
t
e
d
S
e
a
r
c
h
_
t
o
w
n
_
d
r
o
p
d
o
w
n
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
c
f
g
_
i
n
t
e
g
r
a
t
e
d
S
e
a
r
c
h
_
t
o
w
n
_
d
r
o
p
d
o
w
n
'
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
j
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
n
t
e
g
r
a
t
e
d
S
e
a
r
c
h
_
t
o
w
n
_
d
r
o
p
d
o
w
n
'
 
]
)
;


 
 
 
 
$
l
i
s
t
s
[
 
'
i
n
t
e
g
r
a
t
e
d
S
e
a
r
c
h
_
r
o
o
m
_
t
y
p
e
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
c
f
g
_
i
n
t
e
g
r
a
t
e
d
S
e
a
r
c
h
_
r
o
o
m
_
t
y
p
e
'
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
j
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
n
t
e
g
r
a
t
e
d
S
e
a
r
c
h
_
r
o
o
m
_
t
y
p
e
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
i
n
t
e
g
r
a
t
e
d
S
e
a
r
c
h
_
r
o
o
m
_
t
y
p
e
_
d
r
o
p
d
o
w
n
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
c
f
g
_
i
n
t
e
g
r
a
t
e
d
S
e
a
r
c
h
_
r
o
o
m
_
t
y
p
e
_
d
r
o
p
d
o
w
n
'
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
j
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
n
t
e
g
r
a
t
e
d
S
e
a
r
c
h
_
r
o
o
m
_
t
y
p
e
_
d
r
o
p
d
o
w
n
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
i
n
t
e
g
r
a
t
e
d
S
e
a
r
c
h
_
f
e
a
t
u
r
e
s
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
c
f
g
_
i
n
t
e
g
r
a
t
e
d
S
e
a
r
c
h
_
f
e
a
t
u
r
e
s
'
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
j
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
n
t
e
g
r
a
t
e
d
S
e
a
r
c
h
_
f
e
a
t
u
r
e
s
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
i
n
t
e
g
r
a
t
e
d
S
e
a
r
c
h
_
f
e
a
t
u
r
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
c
f
g
_
i
n
t
e
g
r
a
t
e
d
S
e
a
r
c
h
_
f
e
a
t
u
r
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
'
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
j
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
n
t
e
g
r
a
t
e
d
S
e
a
r
c
h
_
f
e
a
t
u
r
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
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
i
n
t
e
g
r
a
t
e
d
S
e
a
r
c
h
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
c
f
g
_
i
n
t
e
g
r
a
t
e
d
S
e
a
r
c
h
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
j
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
n
t
e
g
r
a
t
e
d
S
e
a
r
c
h
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
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
i
n
t
e
g
r
a
t
e
d
S
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
c
f
g
_
i
n
t
e
g
r
a
t
e
d
S
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
j
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
n
t
e
g
r
a
t
e
d
S
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
;

 
 
 
 
$
l
i
s
t
s
[
 
'
i
n
t
e
g
r
a
t
e
d
S
e
a
r
c
h
_
p
r
i
c
e
r
a
n
g
e
s
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
c
f
g
_
i
n
t
e
g
r
a
t
e
d
S
e
a
r
c
h
_
p
r
i
c
e
r
a
n
g
e
s
'
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
j
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
n
t
e
g
r
a
t
e
d
S
e
a
r
c
h
_
p
r
i
c
e
r
a
n
g
e
s
'
 
]
)
;


 
 
 
 
$
l
i
s
t
s
[
 
'
i
n
t
e
g
r
a
t
e
d
S
e
a
r
c
h
_
g
u
e
s
t
n
u
m
b
e
r
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
c
f
g
_
i
n
t
e
g
r
a
t
e
d
S
e
a
r
c
h
_
g
u
e
s
t
n
u
m
b
e
r
'
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
j
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
n
t
e
g
r
a
t
e
d
S
e
a
r
c
h
_
g
u
e
s
t
n
u
m
b
e
r
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
i
n
t
e
g
r
a
t
e
d
S
e
a
r
c
h
_
s
t
a
r
s
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
c
f
g
_
i
n
t
e
g
r
a
t
e
d
S
e
a
r
c
h
_
s
t
a
r
s
'
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
j
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
n
t
e
g
r
a
t
e
d
S
e
a
r
c
h
_
s
t
a
r
s
'
 
]
)
;


 
 
 
 
$
l
i
s
t
s
[
 
'
s
h
o
w
L
a
n
g
D
r
o
p
d
o
w
n
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
c
f
g
_
s
h
o
w
L
a
n
g
D
r
o
p
d
o
w
n
'
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
j
r
C
o
n
f
i
g
[
 
'
s
h
o
w
L
a
n
g
D
r
o
p
d
o
w
n
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
u
s
e
N
e
w
u
s
e
r
s
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
c
f
g
_
u
s
e
N
e
w
u
s
e
r
s
'
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
j
r
C
o
n
f
i
g
[
 
'
u
s
e
N
e
w
u
s
e
r
s
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
i
s
_
s
i
n
g
l
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
i
n
s
t
a
l
l
a
t
i
o
n
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
c
f
g
_
i
s
_
s
i
n
g
l
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
i
n
s
t
a
l
l
a
t
i
o
n
'
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
j
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
s
i
n
g
l
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
i
n
s
t
a
l
l
a
t
i
o
n
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
u
s
e
_
h
t
m
l
_
p
u
r
i
f
i
e
r
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
c
f
g
_
u
s
e
_
h
t
m
l
_
p
u
r
i
f
i
e
r
'
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
j
r
C
o
n
f
i
g
[
 
'
u
s
e
_
h
t
m
l
_
p
u
r
i
f
i
e
r
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
l
i
m
i
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
c
f
g
_
l
i
m
i
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
c
o
u
n
t
r
y
'
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
j
r
C
o
n
f
i
g
[
 
'
l
i
m
i
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
c
o
u
n
t
r
y
'
 
]
)
;


 
 
 
 
$
l
i
s
t
s
[
 
'
u
s
e
_
r
e
v
i
e
w
s
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
c
f
g
_
u
s
e
_
r
e
v
i
e
w
s
'
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
j
r
C
o
n
f
i
g
[
 
'
u
s
e
_
r
e
v
i
e
w
s
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
a
u
t
o
p
u
b
l
i
s
h
_
r
e
v
i
e
w
s
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
c
f
g
_
a
u
t
o
p
u
b
l
i
s
h
_
r
e
v
i
e
w
s
'
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
j
r
C
o
n
f
i
g
[
 
'
a
u
t
o
p
u
b
l
i
s
h
_
r
e
v
i
e
w
s
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
r
e
v
i
e
w
s
_
t
e
s
t
_
m
o
d
e
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
c
f
g
_
r
e
v
i
e
w
s
_
t
e
s
t
_
m
o
d
e
'
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
j
r
C
o
n
f
i
g
[
 
'
r
e
v
i
e
w
s
_
t
e
s
t
_
m
o
d
e
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
s
h
o
w
_
s
e
a
r
c
h
_
o
r
d
e
r
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
c
f
g
_
s
h
o
w
_
s
e
a
r
c
h
_
o
r
d
e
r
'
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
j
r
C
o
n
f
i
g
[
 
'
s
h
o
w
_
s
e
a
r
c
h
_
o
r
d
e
r
'
 
]
)
;


 
 
 
 
$
l
i
s
t
s
[
 
'
o
n
l
y
_
g
u
e
s
t
s
_
c
a
n
_
r
e
v
i
e
w
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
c
f
g
_
o
n
l
y
_
g
u
e
s
t
s
_
c
a
n
_
r
e
v
i
e
w
'
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
j
r
C
o
n
f
i
g
[
 
'
o
n
l
y
_
g
u
e
s
t
s
_
c
a
n
_
r
e
v
i
e
w
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
u
s
e
_
t
i
m
e
z
o
n
e
_
s
w
i
t
c
h
e
r
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
c
f
g
_
u
s
e
_
t
i
m
e
z
o
n
e
_
s
w
i
t
c
h
e
r
'
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
j
r
C
o
n
f
i
g
[
 
'
u
s
e
_
t
i
m
e
z
o
n
e
_
s
w
i
t
c
h
e
r
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
l
o
a
d
_
j
q
u
e
r
y
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
c
f
g
_
l
o
a
d
_
j
q
u
e
r
y
'
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
j
r
C
o
n
f
i
g
[
 
'
l
o
a
d
_
j
q
u
e
r
y
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
u
s
e
_
c
o
m
m
i
s
s
i
o
n
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
c
f
g
_
u
s
e
_
c
o
m
m
i
s
s
i
o
n
'
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
j
r
C
o
n
f
i
g
[
 
'
u
s
e
_
c
o
m
m
i
s
s
i
o
n
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
m
a
n
a
g
e
r
_
b
o
o
k
i
n
g
s
_
t
r
i
g
g
e
r
_
c
o
m
m
i
s
s
i
o
n
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
c
f
g
_
m
a
n
a
g
e
r
_
b
o
o
k
i
n
g
s
_
t
r
i
g
g
e
r
_
c
o
m
m
i
s
s
i
o
n
'
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
j
r
C
o
n
f
i
g
[
 
'
m
a
n
a
g
e
r
_
b
o
o
k
i
n
g
s
_
t
r
i
g
g
e
r
_
c
o
m
m
i
s
s
i
o
n
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
c
o
m
m
i
s
s
i
o
n
_
a
u
t
o
s
u
s
p
e
n
d
_
o
n
_
o
v
e
r
d
u
e
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
c
f
g
_
c
o
m
m
i
s
s
i
o
n
_
a
u
t
o
s
u
s
p
e
n
d
_
o
n
_
o
v
e
r
d
u
e
'
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
j
r
C
o
n
f
i
g
[
 
'
c
o
m
m
i
s
s
i
o
n
_
a
u
t
o
s
u
s
p
e
n
d
_
o
n
_
o
v
e
r
d
u
e
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
l
o
a
d
_
j
q
u
e
r
y
_
u
i
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
c
f
g
_
l
o
a
d
_
j
q
u
e
r
y
_
u
i
'
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
j
r
C
o
n
f
i
g
[
 
'
l
o
a
d
_
j
q
u
e
r
y
_
u
i
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
l
o
a
d
_
j
q
u
e
r
y
_
u
i
_
c
s
s
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
c
f
g
_
l
o
a
d
_
j
q
u
e
r
y
_
u
i
_
c
s
s
'
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
j
r
C
o
n
f
i
g
[
 
'
l
o
a
d
_
j
q
u
e
r
y
_
u
i
_
c
s
s
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
u
s
e
_
c
o
n
v
e
r
s
i
o
n
_
f
e
a
t
u
r
e
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
c
f
g
_
u
s
e
_
c
o
n
v
e
r
s
i
o
n
_
f
e
a
t
u
r
e
'
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
j
r
C
o
n
f
i
g
[
 
'
u
s
e
_
c
o
n
v
e
r
s
i
o
n
_
f
e
a
t
u
r
e
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
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
m
o
d
a
l
_
p
o
p
u
p
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
c
f
g
_
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
m
o
d
a
l
_
p
o
p
u
p
'
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
j
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
m
o
d
a
l
_
p
o
p
u
p
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
u
s
e
N
e
w
u
s
e
r
s
_
s
e
n
d
e
m
a
i
l
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
c
f
g
_
u
s
e
N
e
w
u
s
e
r
s
_
s
e
n
d
e
m
a
i
l
'
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
j
r
C
o
n
f
i
g
[
 
'
u
s
e
N
e
w
u
s
e
r
s
_
s
e
n
d
e
m
a
i
l
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
s
h
o
w
_
t
a
x
_
i
n
_
t
o
t
a
l
s
_
s
u
m
m
a
r
y
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
c
f
g
_
s
h
o
w
_
t
a
x
_
i
n
_
t
o
t
a
l
s
_
s
u
m
m
a
r
y
'
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
j
r
C
o
n
f
i
g
[
 
'
s
h
o
w
_
t
a
x
_
i
n
_
t
o
t
a
l
s
_
s
u
m
m
a
r
y
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
a
l
t
e
r
n
a
t
e
_
s
m
t
p
_
u
s
e
_
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
c
f
g
_
a
l
t
e
r
n
a
t
e
_
s
m
t
p
_
u
s
e
_
s
e
t
t
i
n
g
s
'
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
j
r
C
o
n
f
i
g
[
 
'
a
l
t
e
r
n
a
t
e
_
s
m
t
p
_
u
s
e
_
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
l
i
s
t
s
[
 
'
a
l
t
e
r
n
a
t
e
_
s
m
t
p
_
a
u
t
h
e
n
t
i
c
a
t
i
o
n
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
c
f
g
_
a
l
t
e
r
n
a
t
e
_
s
m
t
p
_
a
u
t
h
e
n
t
i
c
a
t
i
o
n
'
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
j
r
C
o
n
f
i
g
[
 
'
a
l
t
e
r
n
a
t
e
_
s
m
t
p
_
a
u
t
h
e
n
t
i
c
a
t
i
o
n
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
a
l
t
e
r
n
a
t
e
_
m
a
i
n
m
e
n
u
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
c
f
g
_
a
l
t
e
r
n
a
t
e
_
m
a
i
n
m
e
n
u
'
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
j
r
C
o
n
f
i
g
[
 
'
a
l
t
e
r
n
a
t
e
_
m
a
i
n
m
e
n
u
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
s
a
f
e
_
m
o
d
e
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
c
f
g
_
s
a
f
e
_
m
o
d
e
'
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
j
r
C
o
n
f
i
g
[
 
'
s
a
f
e
_
m
o
d
e
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
u
s
e
_
j
o
m
r
e
s
_
o
w
n
_
e
d
i
t
o
r
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
c
f
g
_
u
s
e
_
j
o
m
r
e
s
_
o
w
n
_
e
d
i
t
o
r
'
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
j
r
C
o
n
f
i
g
[
 
'
u
s
e
_
j
o
m
r
e
s
_
o
w
n
_
e
d
i
t
o
r
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
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
d
e
t
a
i
l
s
_
i
n
_
t
a
b
s
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
c
f
g
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
_
i
n
_
t
a
b
s
'
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
j
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
_
i
n
_
t
a
b
s
'
 
]
)
;


 
 
 
 
$
l
i
s
t
s
[
 
'
g
m
a
p
_
l
a
y
e
r
_
w
e
a
t
h
e
r
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
c
f
g
_
g
m
a
p
_
l
a
y
e
r
_
w
e
a
t
h
e
r
'
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
j
r
C
o
n
f
i
g
[
 
'
g
m
a
p
_
l
a
y
e
r
_
w
e
a
t
h
e
r
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
g
m
a
p
_
l
a
y
e
r
_
p
a
n
o
r
a
m
i
o
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
c
f
g
_
g
m
a
p
_
l
a
y
e
r
_
p
a
n
o
r
a
m
i
o
'
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
j
r
C
o
n
f
i
g
[
 
'
g
m
a
p
_
l
a
y
e
r
_
p
a
n
o
r
a
m
i
o
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
g
m
a
p
_
l
a
y
e
r
_
t
r
a
n
s
i
t
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
c
f
g
_
g
m
a
p
_
l
a
y
e
r
_
t
r
a
n
s
i
t
'
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
j
r
C
o
n
f
i
g
[
 
'
g
m
a
p
_
l
a
y
e
r
_
t
r
a
n
s
i
t
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
g
m
a
p
_
l
a
y
e
r
_
t
r
a
f
f
i
c
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
c
f
g
_
g
m
a
p
_
l
a
y
e
r
_
t
r
a
f
f
i
c
'
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
j
r
C
o
n
f
i
g
[
 
'
g
m
a
p
_
l
a
y
e
r
_
t
r
a
f
f
i
c
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
g
m
a
p
_
l
a
y
e
r
_
b
i
c
y
c
l
i
n
g
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
c
f
g
_
g
m
a
p
_
l
a
y
e
r
_
b
i
c
y
c
l
i
n
g
'
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
j
r
C
o
n
f
i
g
[
 
'
g
m
a
p
_
l
a
y
e
r
_
b
i
c
y
c
l
i
n
g
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
g
m
a
p
_
p
o
i
s
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
c
f
g
_
g
m
a
p
_
p
o
i
s
'
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
j
r
C
o
n
f
i
g
[
 
'
g
m
a
p
_
p
o
i
s
'
 
]
)
;


 
 
 
 
$
l
i
s
t
s
[
 
'
r
e
v
i
e
w
_
n
a
g
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
c
f
g
_
r
e
v
i
e
w
_
n
a
g
'
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
j
r
C
o
n
f
i
g
[
 
'
r
e
v
i
e
w
_
n
a
g
'
 
]
)
;

	
$
l
i
s
t
s
[
 
'
o
p
t
i
m
i
z
e
_
i
m
a
g
e
s
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
c
f
g
_
o
p
t
i
m
i
z
e
_
i
m
a
g
e
s
'
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
j
r
C
o
n
f
i
g
[
 
'
o
p
t
i
m
i
z
e
_
i
m
a
g
e
s
'
 
]
)
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
j
r
C
o
n
f
i
g
[
'
s
h
o
w
_
p
o
w
e
r
e
d
_
b
y
'
]
)
)
 
{

 
 
 
 
 
 
 
 
$
j
r
C
o
n
f
i
g
[
'
s
h
o
w
_
p
o
w
e
r
e
d
_
b
y
'
]
 
=
 
'
0
'
;

 
 
 
 
}

 
 
 
 
$
l
i
s
t
s
[
 
'
s
h
o
w
_
p
o
w
e
r
e
d
_
b
y
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
c
f
g
_
s
h
o
w
_
p
o
w
e
r
e
d
_
b
y
'
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
j
r
C
o
n
f
i
g
[
 
'
s
h
o
w
_
p
o
w
e
r
e
d
_
b
y
'
 
]
)
;


 
 
 
 
$
l
i
s
t
s
[
 
'
u
s
e
_
b
u
d
g
e
t
_
f
e
a
t
u
r
e
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
c
f
g
_
u
s
e
_
b
u
d
g
e
t
_
f
e
a
t
u
r
e
'
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
j
r
C
o
n
f
i
g
[
 
'
u
s
e
_
b
u
d
g
e
t
_
f
e
a
t
u
r
e
'
 
]
)
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
j
r
C
o
n
f
i
g
[
 
'
n
a
v
b
a
r
_
i
n
v
e
r
s
e
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
$
j
r
C
o
n
f
i
g
[
 
'
n
a
v
b
a
r
_
i
n
v
e
r
s
e
'
 
]
 
=
 
0
;

 
 
 
 
}


 
 
 
 
$
l
i
s
t
s
[
 
'
n
a
v
b
a
r
_
i
n
v
e
r
s
e
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
c
f
g
_
n
a
v
b
a
r
_
i
n
v
e
r
s
e
'
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
j
r
C
o
n
f
i
g
[
 
'
n
a
v
b
a
r
_
i
n
v
e
r
s
e
'
 
]
)
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
j
r
C
o
n
f
i
g
[
 
'
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
_
a
p
p
r
o
v
e
_
n
e
w
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
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
$
j
r
C
o
n
f
i
g
[
 
'
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
_
a
p
p
r
o
v
e
_
n
e
w
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
'
 
]
 
=
 
'
1
'
;

 
 
 
 
}


 
 
 
 
$
l
i
s
t
s
[
 
'
r
e
g
i
o
n
_
n
a
m
e
s
_
a
r
e
_
t
r
a
n
s
l
a
t
a
b
l
e
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
c
f
g
_
r
e
g
i
o
n
_
n
a
m
e
s
_
a
r
e
_
t
r
a
n
s
l
a
t
a
b
l
e
'
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
j
r
C
o
n
f
i
g
[
 
'
r
e
g
i
o
n
_
n
a
m
e
s
_
a
r
e
_
t
r
a
n
s
l
a
t
a
b
l
e
'
 
]
)
;


 
 
 
 
$
l
i
s
t
s
[
 
'
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
_
a
p
p
r
o
v
e
_
n
e
w
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
c
f
g
_
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
_
a
p
p
r
o
v
e
_
n
e
w
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
'
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
j
r
C
o
n
f
i
g
[
 
'
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
_
a
p
p
r
o
v
e
_
n
e
w
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
'
 
]
)
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
j
r
C
o
n
f
i
g
[
 
'
u
s
e
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
i
n
_
f
r
o
n
t
e
n
d
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
i
f
 
(
t
h
i
s
_
c
m
s
_
i
s
_
j
o
o
m
l
a
(
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
j
r
C
o
n
f
i
g
[
 
'
u
s
e
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
i
n
_
f
r
o
n
t
e
n
d
'
 
]
 
=
 
'
1
'
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
j
r
C
o
n
f
i
g
[
 
'
u
s
e
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
i
n
_
f
r
o
n
t
e
n
d
'
 
]
 
=
 
'
0
'
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}


 
 
 
 
$
l
i
s
t
s
[
 
'
u
s
e
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
i
n
_
f
r
o
n
t
e
n
d
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
c
f
g
_
u
s
e
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
i
n
_
f
r
o
n
t
e
n
d
'
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
j
r
C
o
n
f
i
g
[
 
'
u
s
e
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
i
n
_
f
r
o
n
t
e
n
d
'
 
]
)
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
j
r
C
o
n
f
i
g
[
'
l
i
v
e
_
s
c
r
o
l
l
i
n
g
_
e
n
a
b
l
e
d
'
]
)
)
 
{

 
 
 
 
 
 
 
 
$
j
r
C
o
n
f
i
g
[
'
l
i
v
e
_
s
c
r
o
l
l
i
n
g
_
e
n
a
b
l
e
d
'
]
 
=
 
'
1
'
;

 
 
 
 
}


 
 
 
 
$
l
i
s
t
s
[
 
'
l
i
v
e
_
s
c
r
o
l
l
i
n
g
_
e
n
a
b
l
e
d
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
c
f
g
_
l
i
v
e
_
s
c
r
o
l
l
i
n
g
_
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
j
r
C
o
n
f
i
g
[
 
'
l
i
v
e
_
s
c
r
o
l
l
i
n
g
_
e
n
a
b
l
e
d
'
 
]
)
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
j
r
C
o
n
f
i
g
[
 
'
l
o
a
d
_
f
o
n
t
_
a
w
e
s
o
m
e
'
 
]
)
)
 
{

 
 
 
 
 
 
 
 
$
j
r
C
o
n
f
i
g
[
 
'
l
o
a
d
_
f
o
n
t
_
a
w
e
s
o
m
e
'
 
]
 
=
 
'
0
'
;

 
 
 
 
}

 
 
 
 
$
l
i
s
t
s
[
 
'
l
o
a
d
_
f
o
n
t
_
a
w
e
s
o
m
e
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
c
f
g
_
l
o
a
d
_
f
o
n
t
_
a
w
e
s
o
m
e
'
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
j
r
C
o
n
f
i
g
[
 
'
l
o
a
d
_
f
o
n
t
_
a
w
e
s
o
m
e
'
 
]
)
;

 
 
 
 
$
l
i
s
t
s
[
 
'
o
v
e
r
r
i
d
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
c
o
n
t
a
c
t
_
d
e
t
a
i
l
s
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
c
f
g
_
o
v
e
r
r
i
d
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
c
o
n
t
a
c
t
_
d
e
t
a
i
l
s
'
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
 
(
i
n
t
)
 
$
j
r
C
o
n
f
i
g
[
 
'
o
v
e
r
r
i
d
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
c
o
n
t
a
c
t
_
d
e
t
a
i
l
s
'
 
]
)
;


 
 
 
 
$
l
i
s
t
s
[
 
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
s
y
m
b
o
l
_
s
w
a
p
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
c
f
g
_
c
u
r
r
e
n
c
y
_
s
y
m
b
o
l
_
s
w
a
p
'
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
 
(
i
n
t
)
 
$
j
r
C
o
n
f
i
g
[
 
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
s
y
m
b
o
l
_
s
w
a
p
'
 
]
)
;


 
 
 
 
$
m
a
p
_
s
t
y
l
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

 
 
 
 
$
m
a
p
_
s
t
y
l
e
_
f
i
l
e
s
 
=
 
g
e
t
_
m
a
p
_
s
t
y
l
e
s
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
m
a
p
_
s
t
y
l
e
_
f
i
l
e
s
 
a
s
 
$
s
t
y
l
e
_
f
i
l
e
)
 
{

 
 
 
 
 
 
 
 
$
m
a
p
_
s
t
y
l
e
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
t
y
l
e
_
f
i
l
e
,
 
$
s
t
y
l
e
_
f
i
l
e
)
;

 
 
 
 
}

 
 
 
 
$
m
a
p
_
s
t
y
l
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
m
a
p
_
s
t
y
l
e
s
,
 
'
c
f
g
_
m
a
p
_
s
t
y
l
e
'
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
j
r
C
o
n
f
i
g
[
 
'
m
a
p
_
s
t
y
l
e
'
 
]
)
;


 
 
 
 
$
l
i
s
t
s
[
 
'
s
e
n
d
E
r
r
o
r
E
m
a
i
l
s
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
c
f
g
_
s
e
n
d
E
r
r
o
r
E
m
a
i
l
s
'
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
j
r
C
o
n
f
i
g
[
 
'
s
e
n
d
E
r
r
o
r
E
m
a
i
l
s
'
 
]
)
;

	
$
l
i
s
t
s
[
 
'
p
l
i
s
t
_
i
m
a
g
e
s
_
a
s
_
s
l
i
d
e
s
h
o
w
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
c
f
g
_
p
l
i
s
t
_
i
m
a
g
e
s
_
a
s
_
s
l
i
d
e
s
h
o
w
'
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
j
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
l
i
s
t
_
i
m
a
g
e
s
_
a
s
_
s
l
i
d
e
s
h
o
w
'
 
]
)
;

	
$
l
i
s
t
s
[
 
'
d
e
l
e
t
e
_
a
l
l
_
d
a
t
a
_
o
n
_
u
n
i
n
s
t
a
l
l
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
c
f
g
_
d
e
l
e
t
e
_
a
l
l
_
d
a
t
a
_
o
n
_
u
n
i
n
s
t
a
l
l
'
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
j
r
C
o
n
f
i
g
[
 
'
d
e
l
e
t
e
_
a
l
l
_
d
a
t
a
_
o
n
_
u
n
i
n
s
t
a
l
l
'
 
]
)
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
'
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
'
,
 
'
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
'
)
;

	
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
'
C
r
o
n
'
,
 
'
C
r
o
n
 
j
o
b
'
)
;

	
$
l
i
s
t
s
[
 
'
c
r
o
n
_
m
e
t
h
o
d
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
o
p
t
i
o
n
s
,
 
'
c
f
g
_
c
r
o
n
_
m
e
t
h
o
d
'
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
j
r
C
o
n
f
i
g
[
 
'
c
r
o
n
_
m
e
t
h
o
d
'
 
]
)
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
'
f
i
l
e
'
,
 
'
F
i
l
e
'
)
;

	
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
'
d
a
t
a
b
a
s
e
'
,
 
'
D
a
t
a
b
a
s
e
'
)
;

	
$
l
i
s
t
s
[
 
'
s
e
s
s
i
o
n
_
h
a
n
d
l
e
r
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
o
p
t
i
o
n
s
,
 
'
c
f
g
_
s
e
s
s
i
o
n
_
h
a
n
d
l
e
r
'
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
j
r
C
o
n
f
i
g
[
 
'
s
e
s
s
i
o
n
_
h
a
n
d
l
e
r
'
 
]
)
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
 
'
R
O
A
D
M
A
P
'
,
 
'
R
o
a
d
m
a
p
'
 
)
;

	
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
 
'
S
A
T
E
L
L
I
T
E
'
,
 
'
S
a
t
e
l
l
i
t
e
'
 
)
;

	
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
 
'
H
Y
B
R
I
D
'
,
 
'
H
y
b
r
i
d
'
 
)
;

	
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
 
'
T
E
R
R
A
I
N
'
,
 
'
T
e
r
r
a
i
n
'
 
)
;

	
$
l
i
s
t
s
[
 
'
m
a
p
_
t
y
p
e
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
o
p
t
i
o
n
s
,
 
'
c
f
g
_
m
a
p
_
t
y
p
e
'
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
j
r
C
o
n
f
i
g
[
 
'
m
a
p
_
t
y
p
e
'
 
]
)
;

	

	
/
/
f
r
o
n
t
e
n
d
 
c
p
a
n
e
l
 
h
o
m
e
 
p
a
g
e
 
g
r
i
d
 
o
p
t
i
o
n
s

	
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
'
2
/
3
 
1
/
3
'
,
 
'
2
/
3
 
|
 
1
/
3
'
)
;

	
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
'
1
/
3
 
2
/
3
'
,
 
'
1
/
3
 
|
 
2
/
3
'
)
;

	
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
'
1
/
3
 
1
/
3
 
1
/
3
'
,
 
'
1
/
3
 
|
 
1
/
3
 
|
 
1
/
3
'
)
;

	
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
'
1
/
4
 
1
/
4
 
1
/
4
 
1
/
4
'
,
 
'
1
/
4
 
|
 
1
/
4
 
|
 
1
/
4
 
|
 
1
/
4
'
)
;

	
$
l
i
s
t
s
[
 
'
f
r
o
n
t
_
c
p
a
n
e
l
_
h
o
m
e
_
g
r
i
d
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
o
p
t
i
o
n
s
,
 
'
c
f
g
_
f
r
o
n
t
_
c
p
a
n
e
l
_
h
o
m
e
_
g
r
i
d
'
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
j
r
C
o
n
f
i
g
[
 
'
f
r
o
n
t
_
c
p
a
n
e
l
_
h
o
m
e
_
g
r
i
d
'
 
]
)
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
 
(
$
i
=
1
;
$
i
<
=
2
3
;
$
i
+
+
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
i
,
 
$
i
 
)
;

	
	
}

	
$
l
i
s
t
s
[
 
'
m
a
p
_
z
o
o
m
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
o
p
t
i
o
n
s
,
 
'
c
f
g
_
m
a
p
_
z
o
o
m
'
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
j
r
C
o
n
f
i
g
[
 
'
m
a
p
_
z
o
o
m
'
 
]
)
;

	

	
$
l
i
s
t
s
[
 
'
s
e
n
d
_
e
m
a
i
l
_
c
o
p
i
e
s
_
t
o
_
s
i
t
e
_
a
d
m
i
n
s
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
c
f
g
_
s
e
n
d
_
e
m
a
i
l
_
c
o
p
i
e
s
_
t
o
_
s
i
t
e
_
a
d
m
i
n
s
'
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
j
r
C
o
n
f
i
g
[
 
'
s
e
n
d
_
e
m
a
i
l
_
c
o
p
i
e
s
_
t
o
_
s
i
t
e
_
a
d
m
i
n
s
'
 
]
)
;


 
 
 
 
$
c
o
m
p
o
n
e
n
t
A
r
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
c
o
m
p
o
n
e
n
t
A
r
g
s
[
 
'
l
i
s
t
s
'
 
]
 
=
 
$
l
i
s
t
s
;

 
 
 
 
$
c
o
m
p
o
n
e
n
t
A
r
g
s
[
 
'
j
s
I
n
p
u
t
F
o
r
m
a
t
D
r
o
p
d
o
w
n
L
i
s
t
'
 
]
 
=
 
$
j
s
I
n
p
u
t
F
o
r
m
a
t
D
r
o
p
d
o
w
n
L
i
s
t
;

 
 
 
 
$
c
o
m
p
o
n
e
n
t
A
r
g
s
[
 
'
j
r
t
b
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
c
o
m
p
o
n
e
n
t
A
r
g
s
[
 
'
g
e
o
s
e
a
r
c
h
D
r
o
p
d
o
w
n
L
i
s
t
'
 
]
 
=
 
$
g
e
o
s
e
a
r
c
h
D
r
o
p
d
o
w
n
L
i
s
t
;

 
 
 
 
$
c
o
m
p
o
n
e
n
t
A
r
g
s
[
 
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
_
d
r
o
p
d
o
w
n
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
c
o
m
p
o
n
e
n
t
A
r
g
s
[
 
'
j
q
u
e
r
y
U
I
t
h
e
m
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
L
i
s
t
'
 
]
 
=
 
$
j
q
u
e
r
y
U
I
t
h
e
m
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
L
i
s
t
;

 
 
 
 
$
c
o
m
p
o
n
e
n
t
A
r
g
s
[
 
'
s
o
r
t
A
r
r
a
y
D
r
o
p
d
o
w
n
'
 
]
 
=
 
$
s
o
r
t
A
r
r
a
y
D
r
o
p
d
o
w
n
;

 
 
 
 
$
c
o
m
p
o
n
e
n
t
A
r
g
s
[
 
'
c
a
l
e
n
d
a
r
S
t
a
r
t
D
a
y
s
D
r
o
p
d
o
w
n
L
i
s
t
'
 
]
 
=
 
$
c
a
l
e
n
d
a
r
S
t
a
r
t
D
a
y
s
D
r
o
p
d
o
w
n
L
i
s
t
;

 
 
 
 
$
c
o
m
p
o
n
e
n
t
A
r
g
s
[
 
'
l
a
n
g
u
a
g
e
_
c
o
n
t
e
x
t
_
d
r
o
p
d
o
w
n
'
 
]
 
=
 
$
l
a
n
g
u
a
g
e
_
c
o
n
t
e
x
t
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
c
o
m
p
o
n
e
n
t
A
r
g
s
[
 
'
g
u
e
s
t
n
u
m
b
e
r
s
e
a
r
c
h
D
r
o
p
d
o
w
n
L
i
s
t
'
 
]
 
=
 
$
g
u
e
s
t
n
u
m
b
e
r
s
e
a
r
c
h
D
r
o
p
d
o
w
n
L
i
s
t
;

 
 
 
 
$
c
o
m
p
o
n
e
n
t
A
r
g
s
[
 
'
f
i
l
t
e
r
i
n
g
_
l
e
v
e
l
_
d
r
o
p
d
o
w
n
'
 
]
 
=
 
$
f
i
l
t
e
r
i
n
g
_
l
e
v
e
l
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
c
o
m
p
o
n
e
n
t
A
r
g
s
[
 
'
l
a
y
o
u
t
s
'
 
]
 
=
 
$
l
a
y
o
u
t
s
;

 
 
 
 
$
c
o
m
p
o
n
e
n
t
A
r
g
s
[
 
'
p
r
o
d
u
c
t
i
o
n
_
d
e
v
e
l
o
p
m
e
n
t
_
d
r
o
p
d
o
w
n
'
 
]
 
=
 
$
p
r
o
d
u
c
t
i
o
n
_
d
e
v
e
l
o
p
m
e
n
t
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
c
o
m
p
o
n
e
n
t
A
r
g
s
[
 
'
n
a
v
b
a
r
_
l
o
c
a
t
i
o
n
_
d
r
o
p
d
o
w
n
'
 
]
 
=
 
$
n
a
v
b
a
r
_
l
o
c
a
t
i
o
n
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
c
o
m
p
o
n
e
n
t
A
r
g
s
[
 
'
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
_
d
r
o
p
d
o
w
n
'
 
]
 
=
 
$
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
c
o
m
p
o
n
e
n
t
A
r
g
s
[
 
'
m
a
p
_
s
t
y
l
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
'
 
]
 
=
 
$
m
a
p
_
s
t
y
l
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


 
 
 
 
o
b
_
s
t
a
r
t
(
)
;
 
?
>

	
<
h
2
 
c
l
a
s
s
=
"
p
a
g
e
-
h
e
a
d
e
r
"
>
J
o
m
r
e
s
 
<
?
p
h
p
 
e
c
h
o
 
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
A
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
A
'
,
 
f
a
l
s
e
)
;
 
?
>
<
/
h
2
>

	
<
f
o
r
m
 
a
c
t
i
o
n
=
"
<
?
p
h
p
 
e
c
h
o
 
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
;
 
?
>
"
 
m
e
t
h
o
d
=
"
p
o
s
t
"
 
n
a
m
e
=
"
a
d
m
i
n
F
o
r
m
"
>


	
<
?
p
h
p

 
 
 
 
e
c
h
o
 
$
j
r
t
b
;


 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
 
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
p
a
n
e
l
'
)
;


 
 
 
 
$
c
o
m
p
o
n
e
n
t
A
r
g
s
[
 
'
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
'
 
]
 
=
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
;


 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
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
s
(
)
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
1
0
5
0
1
'
,
 
$
c
o
m
p
o
n
e
n
t
A
r
g
s
)
;
 
/
/
 
G
e
n
e
r
a
t
e
 
c
o
n
f
i
g
u
r
a
t
i
o
n
 
o
p
t
i
o
n
s
 
t
a
b
s


 
 
 
 
$
c
o
n
f
i
g
u
r
a
t
i
o
n
P
a
n
e
l
-
>
e
n
d
T
a
b
s
(
)
;
 
?
>


	
<
i
n
p
u
t
 
t
y
p
e
=
"
h
i
d
d
e
n
"
 
n
a
m
e
=
"
c
f
g
_
u
s
e
G
l
o
b
a
l
P
F
e
a
t
u
r
e
s
"
 
v
a
l
u
e
=
"
<
?
p
h
p
 
e
c
h
o
 
$
j
r
C
o
n
f
i
g
[
 
'
u
s
e
G
l
o
b
a
l
P
F
e
a
t
u
r
e
s
'
 
]
;
 
?
>
"
/
>

	
<
i
n
p
u
t
 
t
y
p
e
=
"
h
i
d
d
e
n
"
 
n
a
m
e
=
"
c
f
g
_
u
s
e
G
l
o
b
a
l
R
o
o
m
T
y
p
e
s
"
 
v
a
l
u
e
=
"
<
?
p
h
p
 
e
c
h
o
 
$
j
r
C
o
n
f
i
g
[
 
'
u
s
e
G
l
o
b
a
l
R
o
o
m
T
y
p
e
s
'
 
]
;
 
?
>
"
/
>

	
<
i
n
p
u
t
 
t
y
p
e
=
"
h
i
d
d
e
n
"
 
n
a
m
e
=
"
c
f
g
_
d
y
n
a
m
i
c
M
i
n
I
n
t
e
r
v
a
l
R
e
c
a
l
c
u
l
a
t
i
o
n
"
 
v
a
l
u
e
=
"
<
?
p
h
p
 
e
c
h
o
 
$
j
r
C
o
n
f
i
g
[
 
'
d
y
n
a
m
i
c
M
i
n
I
n
t
e
r
v
a
l
R
e
c
a
l
c
u
l
a
t
i
o
n
'
 
]
;
 
?
>
"
/
>

	
<
i
n
p
u
t
 
t
y
p
e
=
"
h
i
d
d
e
n
"
 
n
a
m
e
=
"
c
f
g
_
d
i
s
a
b
l
e
A
u
d
i
t
"
 
v
a
l
u
e
=
"
<
?
p
h
p
 
e
c
h
o
 
$
j
r
C
o
n
f
i
g
[
 
'
d
i
s
a
b
l
e
A
u
d
i
t
'
 
]
;
 
?
>
"
/
>

	
<
i
n
p
u
t
 
t
y
p
e
=
"
h
i
d
d
e
n
"
 
n
a
m
e
=
"
c
f
g
_
a
l
l
o
w
e
d
T
a
g
s
"
 
v
a
l
u
e
=
"
<
?
p
h
p
 
e
c
h
o
 
$
j
r
C
o
n
f
i
g
[
 
'
a
l
l
o
w
e
d
T
a
g
s
'
 
]
;
 
?
>
"
/
>

	
<
i
n
p
u
t
 
t
y
p
e
=
"
h
i
d
d
e
n
"
 
n
a
m
e
=
"
n
o
_
h
t
m
l
"
 
v
a
l
u
e
=
"
1
"
/
>

	
<
i
n
p
u
t
 
t
y
p
e
=
"
h
i
d
d
e
n
"
 
n
a
m
e
=
"
t
a
s
k
"
 
v
a
l
u
e
=
"
s
a
v
e
_
s
i
t
e
_
s
e
t
t
i
n
g
s
"
/
>

	
<
i
n
p
u
t
 
t
y
p
e
=
"
h
i
d
d
e
n
"
 
n
a
m
e
=
"
o
p
t
i
o
n
"
 
v
a
l
u
e
=
"
c
o
m
_
j
o
m
r
e
s
"
/
>

	
<
/
f
o
r
m
>

	
<
?
p
h
p

 
 
 
 
o
b
_
e
n
d
_
f
l
u
s
h
(
)
;

}


/
*
*

 
*
 
S
a
v
e
s
 
t
h
e
 
s
i
t
e
 
c
o
n
f
i
g
u
r
a
t
i
o
n
 
d
a
t
a
.

 
*
/

f
u
n
c
t
i
o
n
 
s
a
v
e
S
i
t
e
C
o
n
f
i
g
(
$
o
v
e
r
r
i
d
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
)

{

 
 
 
 
i
g
n
o
r
e
_
u
s
e
r
_
a
b
o
r
t
(
t
r
u
e
)
;


 
 
 
 
i
f
 
(
f
i
l
e
_
e
x
i
s
t
s
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
_
A
B
S
P
A
T
H
.
'
k
e
y
.
p
h
p
'
)
)
 
{

 
 
 
 
 
 
 
 
u
n
l
i
n
k
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
_
A
B
S
P
A
T
H
.
'
k
e
y
.
p
h
p
'
)
;

 
 
 
 
}


 
 
 
 
i
f
 
(
f
i
l
e
_
e
x
i
s
t
s
(
J
O
M
R
E
S
C
O
N
F
I
G
_
A
B
S
O
L
U
T
E
_
P
A
T
H
.
J
R
D
S
.
J
O
M
R
E
S
_
R
O
O
T
_
D
I
R
E
C
T
O
R
Y
.
J
R
D
S
.
'
c
o
n
f
i
g
u
r
a
t
i
o
n
.
p
h
p
'
)
)
 
{

 
 
 
 
 
 
 
 
i
n
c
l
u
d
e
 
J
O
M
R
E
S
C
O
N
F
I
G
_
A
B
S
O
L
U
T
E
_
P
A
T
H
.
J
R
D
S
.
J
O
M
R
E
S
_
R
O
O
T
_
D
I
R
E
C
T
O
R
Y
.
J
R
D
S
.
'
c
o
n
f
i
g
u
r
a
t
i
o
n
.
p
h
p
'
;

 
 
 
 
 
 
 
 
$
t
m
p
C
o
n
f
i
g
 
=
 
$
j
r
C
o
n
f
i
g
;

 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
i
n
c
l
u
d
e
 
J
O
M
R
E
S
C
O
N
F
I
G
_
A
B
S
O
L
U
T
E
_
P
A
T
H
.
J
R
D
S
.
J
O
M
R
E
S
_
R
O
O
T
_
D
I
R
E
C
T
O
R
Y
.
J
R
D
S
.
'
s
i
t
e
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
'
;

 
 
 
 
 
 
 
 
$
t
m
p
C
o
n
f
i
g
 
=
 
$
j
r
C
o
n
f
i
g
;

 
 
 
 
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
o
v
e
r
r
i
d
e
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
o
v
e
r
r
i
d
e
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
v
a
l
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
C
o
n
f
i
g
[
$
k
e
y
]
 
=
 
$
v
a
l
;

 
 
 
 
 
 
 
 
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
_
P
O
S
T
 
a
s
 
$
k
 
=
>
 
$
v
)
 
{

 
 
 
 
 
 
 
 
i
f
 
(
s
t
r
p
o
s
(
$
k
,
 
'
c
f
g
_
'
)
 
!
=
=
 
f
a
l
s
e
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
v
 
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
P
O
S
T
,
 
$
k
,
 
'
'
)
;

	
	
	

	
	
	
$
d
i
r
t
y
 
=
 
(
s
t
r
i
n
g
)
 
$
k
;

	
	
	
$
k
 
=
 
s
u
b
s
t
r
(
a
d
d
s
l
a
s
h
e
s
(
$
d
i
r
t
y
)
,
 
4
)
;

	
	
	
$
v
 
=
 
f
i
l
t
e
r
_
v
a
r
(
$
v
,
 
F
I
L
T
E
R
_
S
A
N
I
T
I
Z
E
_
S
P
E
C
I
A
L
_
C
H
A
R
S
)
;


	
	
	
$
t
m
p
C
o
n
f
i
g
[
 
$
k
 
]
 
=
 
$
v
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
i
f
 
(
s
t
r
p
o
s
(
$
k
,
 
'
c
f
g
A
r
r
_
'
)
 
!
=
=
 
f
a
l
s
e
)
 
{

	
	
	
$
v
 
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
P
O
S
T
,
 
$
k
,
 
a
r
r
a
y
(
)
)
;

	
	
	
$
v
 
=
 
i
m
p
l
o
d
e
(
'
,
'
,
$
v
)
;

	
	
	

	
	
	
$
d
i
r
t
y
 
=
 
(
s
t
r
i
n
g
)
 
$
k
;

	
	
	
$
k
 
=
 
s
u
b
s
t
r
(
a
d
d
s
l
a
s
h
e
s
(
$
d
i
r
t
y
)
,
 
7
)
;

	
	
	
$
v
 
=
 
f
i
l
t
e
r
_
v
a
r
(
$
v
,
 
F
I
L
T
E
R
_
S
A
N
I
T
I
Z
E
_
S
P
E
C
I
A
L
_
C
H
A
R
S
)
;


	
	
	
$
t
m
p
C
o
n
f
i
g
[
 
$
k
 
]
 
=
 
$
v
;

	
	
}

 
 
 
 
}


 
 
 
 
/
/
s
a
v
e
 
c
o
n
f
i
g
 
t
o
 
f
i
l
e

 
 
 
 
i
f
 
(
!
f
i
l
e
_
p
u
t
_
c
o
n
t
e
n
t
s
(
J
O
M
R
E
S
C
O
N
F
I
G
_
A
B
S
O
L
U
T
E
_
P
A
T
H
.
J
R
D
S
.
J
O
M
R
E
S
_
R
O
O
T
_
D
I
R
E
C
T
O
R
Y
.
J
R
D
S
.
'
c
o
n
f
i
g
u
r
a
t
i
o
n
.
p
h
p
'
,

'
<
?
p
h
p

#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
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
 
\
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
\
'
 
)
 
o
r
 
d
i
e
(
 
\
'
\
'
 
)
;

#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#
#


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
 
'
 
.
v
a
r
_
e
x
p
o
r
t
(
$
t
m
p
C
o
n
f
i
g
,
 
t
r
u
e
)
.
'
;

'
)
)
 
{

 
 
 
 
 
 
 
 
t
r
i
g
g
e
r
_
e
r
r
o
r
(
'
E
R
R
O
R
:
 
'
.
J
O
M
R
E
S
C
O
N
F
I
G
_
A
B
S
O
L
U
T
E
_
P
A
T
H
.
J
R
D
S
.
J
O
M
R
E
S
_
R
O
O
T
_
D
I
R
E
C
T
O
R
Y
.
J
R
D
S
.
'
c
o
n
f
i
g
u
r
a
t
i
o
n
.
p
h
p
'
.
'
 
c
a
n
`
t
 
b
e
 
s
a
v
e
d
.
 
P
l
e
a
s
e
 
s
o
l
v
e
 
t
h
e
 
p
e
r
m
i
s
s
i
o
n
 
p
r
o
b
l
e
m
 
a
n
d
 
t
r
y
 
a
g
a
i
n
.
'
,
 
E
_
U
S
E
R
_
E
R
R
O
R
)
;

 
 
 
 
 
 
 
 
e
x
i
t
;

 
 
 
 
}


 
 
 
 
/
/
c
l
e
a
n
u
p

 
 
 
 
$
r
e
g
i
s
t
r
y
 
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
_
r
e
g
i
s
t
r
y
'
)
;

 
 
 
 
$
r
e
g
i
s
t
r
y
-
>
r
e
g
e
n
e
r
a
t
e
_
r
e
g
i
s
t
r
y
(
)
;


	

	
i
f
 
(
f
i
l
e
_
e
x
i
s
t
s
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
_
A
B
S
P
A
T
H
.
'
l
a
t
e
s
t
_
v
e
r
s
i
o
n
.
p
h
p
'
)
)
 
{
 

	
	
u
n
l
i
n
k
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
_
A
B
S
P
A
T
H
.
'
l
a
t
e
s
t
_
v
e
r
s
i
o
n
.
p
h
p
'
)
;

	
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
o
v
e
r
r
i
d
e
s
)
)
 
{
 
/
/
 
I
f
 
w
e
'
v
e
 
c
o
m
e
 
f
r
o
m
 
t
h
e
 
S
i
t
e
 
C
o
n
f
i
g
 
p
a
g
e
,
 
w
e
 
w
a
n
t
 
t
o
 
r
e
d
i
r
e
c
t
 
t
h
e
 
u
s
e
r
 
b
a
c
k
 
t
o
 
t
h
e
 
s
i
t
e
 
c
o
n
f
i
g
u
r
a
t
i
o
n
 
p
a
g
e
,
 
o
t
h
e
r
w
i
s
e
 
w
e
 
d
o
n
'
t
 
r
e
d
i
r
e
c
t
.

 
 
 
 
 
 
 
 
j
o
m
r
e
s
R
e
d
i
r
e
c
t
(
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
s
i
t
e
_
s
e
t
t
i
n
g
s
'
)
,
 
'
C
o
n
f
i
g
u
r
a
t
i
o
n
 
s
a
v
e
d
'
)
;

 
 
 
 
}

}


f
u
n
c
t
i
o
n
 
s
e
a
r
c
h
C
S
S
T
h
e
m
e
s
D
i
r
F
o
r
C
S
S
F
i
l
e
s
(
)

{

 
 
 
 
$
c
s
s
F
i
l
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

 
 
 
 
$
j
r
e
P
a
t
h
 
=
 
J
O
M
R
E
S
_
N
O
D
E
_
M
O
D
U
L
E
S
_
A
B
S
P
A
T
H
.
'
j
q
u
e
r
y
-
u
i
-
t
h
e
m
e
s
'
.
J
R
D
S
.
'
t
h
e
m
e
s
'
.
J
R
D
S
;

 
 
 
 
$
d
 
=
 
@
d
i
r
(
$
j
r
e
P
a
t
h
)
;

 
 
 
 
$
d
o
c
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
$
d
)
 
{

 
 
 
 
 
 
 
 
w
h
i
l
e
 
(
f
a
l
s
e
 
!
=
=
 
(
$
e
n
t
r
y
 
=
 
$
d
-
>
r
e
a
d
(
)
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
s
u
b
s
t
r
(
$
e
n
t
r
y
,
 
0
,
 
1
)
 
!
=
 
'
.
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
d
o
c
s
[
 
]
 
=
 
$
e
n
t
r
y
;

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
$
d
-
>
c
l
o
s
e
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
d
o
c
s
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
s
o
r
t
(
$
d
o
c
s
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
d
o
c
s
 
a
s
 
$
d
o
c
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
l
i
s
t
d
i
r
 
=
 
$
j
r
e
P
a
t
h
.
$
d
o
c
.
J
R
D
S
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
d
r
 
=
 
@
d
i
r
(
$
l
i
s
t
d
i
r
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
d
r
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
w
h
i
l
e
 
(
f
a
l
s
e
 
!
=
=
 
(
$
e
n
t
r
y
 
=
 
$
d
r
-
>
r
e
a
d
(
)
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
f
i
l
e
n
a
m
e
 
=
 
$
e
n
t
r
y
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
m
p
A
r
r
 
=
 
e
x
p
l
o
d
e
(
'
.
'
,
 
$
f
i
l
e
n
a
m
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
e
x
t
e
n
s
i
o
n
 
=
 
$
t
m
p
A
r
r
[
 
c
o
u
n
t
(
$
t
m
p
A
r
r
)
 
-
 
1
 
]
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
f
i
l
e
n
a
m
e
 
=
=
 
'
j
q
u
e
r
y
-
u
i
.
m
i
n
.
c
s
s
'
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
s
s
F
i
l
e
s
[
 
]
 
=
 
a
r
r
a
y
(
'
c
s
s
f
i
l
e
'
 
=
>
 
$
f
i
l
e
n
a
m
e
,
 
'
s
u
b
d
i
r
'
 
=
>
 
$
d
o
c
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
d
r
-
>
c
l
o
s
e
(
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}

 
 
 
 
}

 
 
 
 
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
c
o
l
o
u
r
S
c
h
e
m
e
D
a
t
a
A
r
r
a
y
 
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
0
0
2
1
'
)
;
 
/
/
 
o
p
t
i
o
n
a
l


 
 
 
 
i
f
 
(
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
c
o
l
o
u
r
S
c
h
e
m
e
D
a
t
a
A
r
r
a
y
)
)
 
{

 
 
 
 
 
 
 
 
$
c
s
s
F
i
l
e
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
c
s
s
F
i
l
e
s
,
 
$
c
o
l
o
u
r
S
c
h
e
m
e
D
a
t
a
A
r
r
a
y
)
;

 
 
 
 
}


 
 
 
 
r
e
t
u
r
n
 
$
c
s
s
F
i
l
e
s
;

}


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
m
a
p
_
s
t
y
l
e
s
(
)

{

 
 
 
 
$
m
a
p
_
s
t
y
l
e
_
d
i
r
 
=
 
J
O
M
R
E
S
_
A
S
S
E
T
S
_
A
B
S
P
A
T
H
.
'
m
a
p
_
s
t
y
l
e
s
'
.
J
R
D
S
;

 
 
 
 
$
s
t
y
l
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

 
 
 
 
f
o
r
e
a
c
h
 
(
n
e
w
 
D
i
r
e
c
t
o
r
y
I
t
e
r
a
t
o
r
(
$
m
a
p
_
s
t
y
l
e
_
d
i
r
)
 
a
s
 
$
f
i
l
e
)
 
{

 
 
 
 
 
 
 
 
i
f
 
(
$
f
i
l
e
-
>
i
s
F
i
l
e
(
)
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
b
a
n
g
 
=
 
e
x
p
l
o
d
e
(
'
.
'
,
 
$
f
i
l
e
-
>
g
e
t
f
i
l
e
n
a
m
e
(
)
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
s
t
y
l
e
s
[
]
 
=
 
$
b
a
n
g
[
0
]
;

 
 
 
 
 
 
 
 
}

 
 
 
 
}

 
 
 
 
n
a
t
s
o
r
t
(
$
s
t
y
l
e
s
)
;


 
 
 
 
r
e
t
u
r
n
 
$
s
t
y
l
e
s
;

}

