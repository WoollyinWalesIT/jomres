
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
1
s
a
v
e
_
c
a
n
c
e
l
l
a
t
i
o
n

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
d
e
f
a
u
l
t
P
r
o
p
e
r
t
y
 
=
 
g
e
t
D
e
f
a
u
l
t
P
r
o
p
e
r
t
y
(
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
)
;

 
 
 
 
 
 
 
 
$
c
o
n
t
r
a
c
t
_
u
i
d
 
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
 
'
c
o
n
t
r
a
c
t
_
u
i
d
'
,
 
0
)
;

 
 
 
 
 
 
 
 
$
r
e
a
s
o
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
P
O
S
T
,
 
'
r
e
a
s
o
n
'
,
 
'
'
)
;

 
 
 
 
 
 
 
 
$
c
a
n
c
e
l
l
a
t
i
o
n
S
u
c
c
e
s
s
f
u
l
 
=
 
f
a
l
s
e
;

 
 
 
 
 
 
 
 
$
s
a
v
e
M
e
s
s
a
g
e
 
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
B
_
G
U
E
S
T
_
C
A
N
C
E
L
L
E
D
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
B
_
G
U
E
S
T
_
C
A
N
C
E
L
L
E
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


 
 
 
 
 
 
 
 
i
f
 
(
$
c
o
n
t
r
a
c
t
_
u
i
d
 
!
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
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
o
m
r
e
s
_
g
e
n
e
r
i
c
_
b
o
o
k
i
n
g
_
c
a
n
c
e
l
'
)
;

 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
 
=
 
n
e
w
 
j
o
m
r
e
s
_
g
e
n
e
r
i
c
_
b
o
o
k
i
n
g
_
c
a
n
c
e
l
(
)
;


 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
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
 
=
 
$
d
e
f
a
u
l
t
P
r
o
p
e
r
t
y
;

 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
c
o
n
t
r
a
c
t
_
u
i
d
 
=
 
$
c
o
n
t
r
a
c
t
_
u
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
r
e
a
s
o
n
 
=
 
$
r
e
a
s
o
n
;

 
 
 
 
 
 
 
 
 
 
 
 
$
b
k
g
-
>
n
o
t
e
 
=
 
$
s
a
v
e
M
e
s
s
a
g
e
;


 
 
 
 
 
 
 
 
 
 
 
 
$
c
a
n
c
e
l
l
a
t
i
o
n
S
u
c
c
e
s
s
f
u
l
 
=
 
$
b
k
g
-
>
c
a
n
c
e
l
_
b
o
o
k
i
n
g
(
)
;


 
 
 
 
 
 
 
 
 
 
 
 
i
f
 
(
$
c
a
n
c
e
l
l
a
t
i
o
n
S
u
c
c
e
s
s
f
u
l
 
=
=
=
 
t
r
u
e
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
2
1
6
2
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
j
i
n
t
o
u
r
 
c
a
n
c
e
l
 
b
o
o
k
i
n
g

	
	
	
	

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
 
g
u
e
s
t
_
u
i
d
,
t
a
g
 
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
c
o
n
t
r
a
c
t
s
 
W
H
E
R
E
 
c
o
n
t
r
a
c
t
_
u
i
d
 
=
 
'
"
.
(
i
n
t
)
 
$
c
o
n
t
r
a
c
t
_
u
i
d
.
"
'
 
A
N
D
 
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
"
.
(
i
n
t
)
 
$
d
e
f
a
u
l
t
P
r
o
p
e
r
t
y
.
"
'
"
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
c
o
n
t
r
a
c
t
D
a
t
a
 
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
c
o
n
t
r
a
c
t
D
a
t
a
 
a
s
 
$
c
a
n
c
e
l
l
a
t
i
o
n
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
g
u
e
s
t
_
u
i
d
 
=
 
$
c
a
n
c
e
l
l
a
t
i
o
n
-
>
g
u
e
s
t
_
u
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
a
g
 
=
 
$
c
a
n
c
e
l
l
a
t
i
o
n
-
>
t
a
g
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
 
e
m
a
i
l
,
f
i
r
s
t
n
a
m
e
,
s
u
r
n
a
m
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
g
u
e
s
t
s
 
W
H
E
R
E
 
g
u
e
s
t
s
_
u
i
d
 
=
 
'
.
$
g
u
e
s
t
_
u
i
d
.
'
 
L
I
M
I
T
 
1
'
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
g
u
e
s
t
D
a
t
a
 
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
,
 
2
)
;

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
$
t
e
x
t
 
=
 
$
t
a
g
.
'
 
-
 
'
.
$
s
a
v
e
M
e
s
s
a
g
e
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
d
e
f
a
u
l
t
P
r
o
p
e
r
t
y
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
 
]
 
=
 
$
d
e
f
a
u
l
t
P
r
o
p
e
r
t
y
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
t
r
a
c
t
_
u
i
d
'
 
]
 
=
 
$
c
o
n
t
r
a
c
t
_
u
i
d
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
t
a
g
'
 
]
 
=
 
$
t
a
g
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
2
1
6
3
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
e
v
e
n
t
F
i
l
e
E
x
i
s
t
s
C
h
e
c
k
(
'
0
7
0
1
1
'
)
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

 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
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
b
o
o
k
i
n
g
s
'
)
,
 
$
s
a
v
e
M
e
s
s
a
g
e
)
;

 
 
 
 
 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
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
U
n
a
b
l
e
 
t
o
 
s
a
v
e
 
c
a
n
c
e
l
l
a
t
i
o
n
.
 
'
.
$
c
a
n
c
e
l
l
a
t
i
o
n
S
u
c
c
e
s
s
f
u
l
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

 
 
 
 
 
 
 
 
 
 
 
 
}

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
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
U
n
a
b
l
e
 
t
o
 
s
a
v
e
 
c
a
n
c
e
l
l
a
t
i
o
n
.
 
(
H
a
c
k
 
a
t
t
e
m
p
t
?
)
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

 
 
 
 
 
 
 
 
}

 
 
 
 
}


/
*
*

 
*
 
M
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
 
m
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
.

 
#

 
*
 
R
e
t
u
r
n
s
 
a
n
y
 
s
e
t
t
i
n
g
s
 
t
h
e
 
t
h
e
 
m
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
 
w
a
n
t
s
 
t
o
 
s
e
n
d
 
b
a
c
k
 
t
o
 
t
h
e
 
c
a
l
l
i
n
g
 
s
c
r
i
p
t
.
 
I
n
 
a
d
d
i
t
i
o
n
 
t
o
 
b
e
i
n
g
 
r
e
t
u
r
n
e
d
 
t
o
 
t
h
e
 
c
a
l
l
i
n
g
 
s
c
r
i
p
t
 
t
h
e
y
 
a
r
e
 
p
u
t
 
i
n
t
o
 
a
n
 
a
r
r
a
y
 
i
n
 
t
h
e
 
m
c
H
a
n
d
l
e
r
 
o
b
j
e
c
t
 
a
s
 
e
g
.
 
$
m
c
H
a
n
d
l
e
r
-
>
m
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
D
a
t
a
[
$
e
P
o
i
n
t
]
[
$
e
N
a
m
e
]

 
*
/

 
 
 
 
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

