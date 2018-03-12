
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
*

	
*
*
 
W
e
b
h
o
o
k
 
D
e
t
a
i
l
s
 
|
 
s
a
v
e
n
o
t
e

	
*
*
 
D
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
 
|
 
A
d
d
 
a
 
w
e
b
h
o
o
k
 
n
o
t
e
 
w
i
t
h
 
t
h
e
 
p
r
o
p
e
r
t
y
 
u
i
d
,
 
c
o
n
t
r
a
c
t
 
u
i
d
 
a
n
d
 
n
o
t
e
 
c
o
n
t
e
n
t
s
.

	
*
*
 
D
a
t
a
 
|
 
s
a
v
e
n
o
t
e
 
,
 
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
 
,
 
p
r
o
p
e
r
t
y
 
u
i
d
,
 
n
o
t
e
 
c
o
n
t
e
n
t
s
 
,
 
u
s
e
r
i
d
 
,
 
u
s
e
r
n
a
m
e

	
*
*
 
N
o
t
e
s
 
|
 

*
/


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
n
o
t
e

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

 
 
 
 
 
 
 
 
i
f
 
(
!
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
u
s
e
r
I
s
M
a
n
a
g
e
r
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
r
e
t
u
r
n
;

 
 
 
 
 
 
 
 
}


 
 
 
 
 
 
 
 
$
n
e
w
t
e
x
t
 
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
n
e
w
t
e
x
t
'
,
 
'
'
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
n
o
t
e
_
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
n
o
t
e
_
i
d
'
,
 
0
)
;

 
 
 
 
 
 
 
 
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
d
a
t
e
t
i
m
e
 
=
 
d
a
t
e
(
'
Y
-
m
-
d
 
H
-
i
-
s
'
)
;


 
 
 
 
 
 
 
 
$
a
u
d
i
t
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
C
O
M
P
_
B
O
O
K
I
N
G
N
O
T
E
S
_
A
U
D
I
T
M
E
S
S
A
G
E
'
,
 
'
_
J
O
M
C
O
M
P
_
B
O
O
K
I
N
G
N
O
T
E
S
_
A
U
D
I
T
M
E
S
S
A
G
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
;

 
 
 
 
 
 
 
 
i
f
 
(
$
n
o
t
e
_
i
d
 
=
=
 
0
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
q
u
e
r
y
 
=
 
"
I
N
S
E
R
T
 
I
N
T
O
 
#
_
_
j
o
m
c
o
m
p
_
n
o
t
e
s
 
(
`
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
`
,
`
n
o
t
e
`
,
`
t
i
m
e
s
t
a
m
p
`
,
`
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
`
)
 
V
A
L
U
E
S
 
(
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
,
'
$
n
e
w
t
e
x
t
'
,
'
$
d
a
t
e
t
i
m
e
'
,
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
)
"
;

 
 
 
 
 
 
 
 
 
 
 
 
$
n
o
t
e
_
i
d
 
=
 
d
o
I
n
s
e
r
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
 
$
a
u
d
i
t
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

 
 
 
 
 
 
 
 
 
 
 
 
$
a
u
d
i
t
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
C
O
M
P
_
B
O
O
K
I
N
G
N
O
T
E
S
_
A
U
D
I
T
M
E
S
S
A
G
E
_
E
D
I
T
'
,
 
'
_
J
O
M
C
O
M
P
_
B
O
O
K
I
N
G
N
O
T
E
S
_
A
U
D
I
T
M
E
S
S
A
G
E
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
,
 
f
a
l
s
e
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
U
P
D
A
T
E
 
#
_
_
j
o
m
c
o
m
p
_
n
o
t
e
s
 
S
E
T
 
`
n
o
t
e
`
=
'
$
n
e
w
t
e
x
t
'
,
`
t
i
m
e
s
t
a
m
p
`
=
'
$
d
a
t
e
t
i
m
e
'
 
W
H
E
R
E
 
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
n
o
t
e
_
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

 
 
 
 
 
 
 
 
 
 
 
 
d
o
I
n
s
e
r
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
 
$
a
u
d
i
t
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
c
o
m
p
_
n
o
t
e
s
 
W
H
E
R
E
 
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
n
o
t
e
_
i
d
.
'
'
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
 
1
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
)
 
{

 
 
 
 
 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
n
e
w
 
s
t
d
C
l
a
s
s
(
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
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
w
e
b
h
o
o
k
_
e
v
e
n
t
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
'
b
o
o
k
i
n
g
_
n
o
t
e
_
s
a
v
e
d
'
;

 
 
 
 
 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
w
e
b
h
o
o
k
_
e
v
e
n
t
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
 
 
 
 
=
 
'
L
o
g
s
 
w
h
e
n
 
b
o
o
k
i
n
g
 
n
o
t
e
s
 
a
r
e
 
a
d
d
e
d
/
e
d
i
t
e
d
.
'
;

 
 
 
 
 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
w
e
b
h
o
o
k
_
e
v
e
n
t
_
p
l
u
g
i
n
 
 
 
 
 
 
 
 
 
=
 
'
c
o
r
e
'
;

 
 
 
 
 
 
 
 
 
 
 
 
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
d
a
t
a
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
n
e
w
 
s
t
d
C
l
a
s
s
(
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
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
d
a
t
a
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
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
d
a
t
a
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
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
-
>
d
a
t
a
-
>
n
o
t
e
_
i
d
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
 
=
 
$
n
o
t
e
_
i
d
;

 
 
 
 
 
 
 
 
 
 
 
 
a
d
d
_
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
(
$
w
e
b
h
o
o
k
_
n
o
t
i
f
i
c
a
t
i
o
n
)
;


 
 
 
 
 
 
 
 
 
 
 
 
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
e
d
i
t
_
b
o
o
k
i
n
g
&
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
.
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
)
)
;

 
 
 
 
 
 
 
 
}
 
e
l
s
e
 
{

 
 
 
 
 
 
 
 
 
 
 
 
e
c
h
o
 
'
E
r
r
o
r
 
s
a
v
i
n
g
 
n
o
t
e
'
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

